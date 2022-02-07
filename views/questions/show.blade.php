<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <i class="ni ni-planet text-blue"></i>  Learnee
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/home">
                    <i class="ni ni-tv-2 text-primary"></i> {{ __('Strona Główna') }}
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="/material">
                    <i class="ni ni-book-bookmark text-blue"></i> {{ __('Materiały Dydaktyczne') }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/workshop">
                  <i class="ni ni-hat-3 text-blue"></i>
                  <span class="nav-link-text">Warsztaty</span>
                </a>
              </li>

            <li class="nav-item">
            <a class="nav-link" href="/question">
                <i class="ni ni-chat-round text-blue"></i>
                <span class="nav-link-text">Forum</span>
            </a>
            </li> 
        </ul>

          <!-- Divider -->
          <hr class="my-3">

        <ul class="navbar-nav">               
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="ni ni-world-2 text-blue"></i> {{ __('Współprace') }}
                </a>
            </li>
            
            
            <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="ni ni-favourite-28 text-red"></i>
                  <span class="nav-link-text">Ulubieńcy</span>
                </a>
              </li>

        </ul>

        <!-- Divider -->
          <hr class="my-3">


        <ul class="navbar-nav">               
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="ni ni-badge text-blue"></i> {{ __('Kontakt') }}
                </a>
            </li>
            
            
            <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="ni ni-support-16 text-blue"></i>
                  <span class="nav-link-text">Wsparcie</span>
                </a>
              </li>
        </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>           
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"> {{auth()->user()->name}}<span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Witaj!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Profil</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Ustawienia</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-bell-55"></i>
                  <span>Powiadomienia</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Wyloguj</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">        
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">                
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
                @if (auth()->user()->id == $question->userID)
              <a href="/question/delete/{{$question->id}}" class="btn btn-sm btn-danger">Usuń</a>
              <a href="/question/update/{{$question->id}}" class="btn btn-sm btn-success">Zakończono</a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class=" col ">
          <div class="card">
            <div class="card-header bg-transparent">
              <span class="h1 font-weight-bold mb-0" style="font-size: 40px;">{{$question->question}}</span>
            </div>
            <div class="card-body">
            Autor - 
            @if($question->type == "not_anonymous")
                {{$user->name}}
            @else
                Anonimowy
            @endif
            </br></br>
            @foreach($comments as $comment )
                  <div class="row icon-examples">
                    <div class="col-lg-12 col-md-6"> 
                        <div class="btn-icon-clipboard">
                          <strong>{{$comment->username}}</strong>  <span style="font-size: 20px;">{{$comment->comment}} </span>
                        </div>                      
                    </div>                
                  </div>
            @endforeach
            </br>
                    <form method="post" action="/comment/{{$question->id}}" autocomplete="off">
                    @csrf
                          <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">                                    
                               <input type="text" name="comment" id="input-name" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Dodaj nowy komentarz') }}"  required autofocus>
                          </div>
                          <div class="text-right">
                                    <button type="submit" class="btn btn-success mt-4" style="background-color: #5e72e4;border-color: #5e72e4;">{{ __('Dodaj komentarz') }}</button>
                          </div>
                    </form>                   
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
        <div class="copyright text-center text-xl-left text-muted">
            &copy; {{ now()->year }} Learnee
        </div>
          </div>
    <div class="col-xl-6">
        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">O nas</a>
            </li>           
            <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
        </ul>
    </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
