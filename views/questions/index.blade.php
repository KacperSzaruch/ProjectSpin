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
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
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
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Szukaj" type="text">
              </div>
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
                    <span class="mb-0 text-sm  font-weight-bold">{{auth()->user()->name}}</span>
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
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item">Forum</li>                  
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="/question/create" class="btn btn-sm btn-neutral">Dodaj</a>
              <a href="#" class="btn btn-sm btn-neutral">Filtruj</a>
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
              <h3 class="mb-0">Forum</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Temat</th>
                    <th scope="col" class="sort" data-sort="budget">Pytanie</th>          
                    <th scope="col">Autor</th>
                    <th scope="col" class="sort" data-sort="completion">Status</th>       
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach($questions as $question)
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">        
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><strong>{{$question->subject}}</strong></span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      <a href="/question/{{$question->id}}">{{$question->question}}</a>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <span class="status">
                        @if ($question->type == "anonymous")
                            Anonimowy
                        @else
                            {{$question->author}}
                        @endif
                        </span>
                      </span>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                      @if ($question->state == "not_answered")
                        <i class="bg-danger"></i>
                        <span class="status">Nieodpowieziano</span>                      
                      @elseif ($question->state == "pending")
                      <i class="bg-warning"></i>
                        <span class="status">W oczekiwaniu</span>
                      @else
                      <i class="bg-success"></i>
                        <span class="status">Odpowiedziano</span>
                      @endif
                      </span>
                    </td>                                       
                  </tr>
                  @endforeach
                  
                 </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                
              </nav>
            </div>
          </div>
        </div>
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
