import sys
import os
import epd1in54_V2
import time
from PIL import Image,ImageDraw,ImageFont
import traceback
import requests
from io import BytesIO

epd = epd1in54_V2.EPD()
response = requests.get('https://ndywm.me/icon.png')
img = Image.open(BytesIO(response.content))
img=img.convert('1')
back = Image.new('1', (epd.width, epd.height), 255)
back.paste(img, (25,25))

epd.init(0)
epd.Clear(0xFF)
epd.display(epd.getbuffer(back))
time.sleep(2)
