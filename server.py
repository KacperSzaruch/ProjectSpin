from http.server import BaseHTTPRequestHandler, HTTPServer
import logging
import sys
import os
import epd1in54_V2
import time
from PIL import Image,ImageDraw,ImageFont
import traceback
import requests
from io import BytesIO

font = ImageFont.truetype('Mogra.ttf', 100)
font2 = ImageFont.truetype('Mogra.ttf', 80)
font3 = ImageFont.truetype('Mogra.ttf', 60)

class S(BaseHTTPRequestHandler):
    def _set_response(self):
        self.send_response(200)
        self.send_header('Content-type', 'text/html')
        self.end_headers()

    def do_GET(self):
        logging.info("GET request,\nPath: %s\nHeaders:\n%s\n", str(self.path), str(self.headers))
        self._set_response()
        self.wfile.write("GET request for {}".format(self.path).encode('utf-8'))

    def do_POST(self):
        global notifs

        content_length = int(self.headers['Content-Length']) # <--- Gets the size of data
        post_data = self.rfile.read(content_length) # <--- Gets the data itself
        print(post_data)
        logging.info("POST request,\nPath: %s\nHeaders:\n%s\n\nBody:\n%s\n",
                str(self.path), str(self.headers), post_data.decode('utf-8'))

        self._set_response()
        self.wfile.write("POST request for {}".format(self.path).encode('utf-8'))


        if(post_data==b'rst=1'):
            notifs=0
            epd.Clear(0xFF)
        else:
            notifs+=1
            img = Image.new('1', (200,200), 255)
            bell=Image.open('bell.bmp')
            img.paste(bell,(0,0))
            canvas = ImageDraw.Draw(img)
            text=str(notifs)
            if len(text)<=1:
                canvas.text((75,60), text,fill=255,font=font)
            elif len(text)==2:
                canvas.text((58,70), text,fill=255,font=font2)
            else:
                canvas.text((55,80), "99+",fill=255,font=font3)
            img.save('save.bmp')
            epd.display(epd.getbuffer(img))

def run(server_class=HTTPServer, handler_class=S, port=8080):
    logging.basicConfig(level=logging.INFO)
    server_address = ('', port)
    httpd = server_class(server_address, handler_class)
    logging.info('Starting httpd...\n')
    try:
        httpd.serve_forever()
    except KeyboardInterrupt:
        pass
    httpd.server_close()
    logging.info('Stopping httpd...\n')

if __name__ == '__main__':
    from sys import argv

    notifs=0
    epd = epd1in54_V2.EPD()
    epd.init(0)
    epd.Clear(0xFF)

    if len(argv) == 2:
        run(port=int(argv[1]))
    else:
        run()
