{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
          {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto">
            @auth
              <li class="nav-item">

                <a class="nav-link" href="/clients">{{ __('Clientes') }}</a>

              </li>
            @endauth

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
              @if (Route::has('login'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
              @endif

              @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                </li>
              @endif
            @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Salir') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav> --}}
<!DOCTYPE html>
<!--
    Template Name: Frest HTML Admin Template
    Author: :Pixinvent
    Website: http://www.pixinvent.com/
    Contact: hello@pixinvent.com
    Follow: www.twitter.com/pixinvents
    Like: www.facebook.com/pixinvents
    Purchase: https://1.envato.market/pixinvent_portfolio
    Renew Support: https://1.envato.market/pixinvent_portfolio
    License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
    
    -->
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="description"
    content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>2 Columns - Frest - Bootstrap HTML admin template</title>
  <link rel="apple-touch-icon" href="{{ asset('./app-assets/images/ico/apple-icon-120.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/app-assets/images/ico/favicon.ico') }}">
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
    rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->}
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/vendors.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/ui/prism.min.css') }}">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/bootstrap-extended.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/colors.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/components.css ') }}">

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">

  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('./assets/css/style.css') }}">
  <!-- END: Custom CSS-->
  @yield('css')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click"
  data-menu="vertical-menu-modern" data-col="2-columns">

  <!-- BEGIN: Header-->
  <div class="header-navbar-shadow"></div>
  <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
    <div class="navbar-wrapper">
      <div class="navbar-container content">
        <div class="navbar-collapse" id="navbar-mobile">
          <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav">
              <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                  href="javascript:void(0);"><i class="ficon bx bx-menu"></i></a></li>
            </ul>


          </div>
          <ul class="nav navbar-nav float-right">

            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                  class="ficon bx bx-fullscreen"></i></a></li>

            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                href="javascript:void(0);" data-toggle="dropdown">
                <div class="user-nav d-sm-flex d-none"><span class="user-name">John Doe</span><span
                    class="user-status">Available</span></div><span><img class="round"
                    src="{{ asset('./app-assets/images/portrait/small/avatar-s-11.jpg') }}" alt="avatar"
                    height="40" width="40"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="javascript:void(0);"><i
                    class="bx bx-user mr-50"></i> Edit Profile</a><a class="dropdown-item" href="javascript:void(0);"><i
                    class="bx bx-envelope mr-50"></i> My Inbox</a><a class="dropdown-item" href="javascript:void(0);"><i
                    class="bx bx-check-square mr-50"></i>
                  Task</a><a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-message mr-50"></i>
                  Chats</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:void(0);"><i
                    class="bx bx-power-off mr-50"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- END: Header-->


  <!-- BEGIN: Main Menu-->
  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="./html/ltr/vertical-menu-template/index.html">
            <div class="brand-logo">
              <svg class="logo" width="26px" height="26px" viewbox="0 0 26 26" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>icon</title>
                <defs>
                  <lineargradient id="linearGradient-1" x1="50%" y1="0%" x2="50%"
                    y2="100%">
                    <stop stop-color="#5A8DEE" offset="0%"></stop>
                    <stop stop-color="#699AF9" offset="100%"></stop>
                  </lineargradient>
                  <lineargradient id="linearGradient-2" x1="0%" y1="0%" x2="100%"
                    y2="100%">
                    <stop stop-color="#FDAC41" offset="0%"></stop>
                    <stop stop-color="#E38100" offset="100%"></stop>
                  </lineargradient>
                </defs>
                <g id="Sprite" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="sprite" transform="translate(-69.000000, -61.000000)">
                    <g id="Group" transform="translate(17.000000, 15.000000)">
                      <g id="icon" transform="translate(52.000000, 46.000000)">
                        <path id="Combined-Shape"
                          d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z">
                        </path>
                        <path id="Combined-Shape"
                          d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5378966 4.74673291,13.1939746 4.7846258,12.8556254 L8.55057141,12.8560055 C8.48653249,13.1896162 8.45300462,13.5340745 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.529522,8.45300462 13.180715,8.48740462 12.8430777,8.55306931 L12.8426531,4.78608796 C13.1851829,4.7472336 13.5334422,4.72727273 13.8863636,4.72727273 Z"
                          fill="#4880EA"></path>
                        <path id="Combined-Shape"
                          d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                          fill="url(#linearGradient-1)"></path>
                        <rect id="Rectangle" x="0" y="0" width="7.68181818" height="7.68181818">
                        </rect>
                        <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0"
                          width="7.68181818" height="7.68181818"></rect>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <h2 class="brand-text mb-0">Mantiene</h2>
          </a></li>
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
              class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
              class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a>
        </li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"
        data-icon-style="lines">

        <li class=" nav-item"><a class="nav-link" href="#"><span class="menu-title text-truncate"
              data-i18n="">Modulos</span></a>
          <ul class="menu-content">

            <li class="active"><a class="d-flex align-items-center nav-link" href="/clients"><i
                  class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate"
                  data-i18n="nav.sk_starter_kit.2_columns">Clientes</span></a>
            </li>

          </ul>
        </li>
        {{-- <li class=" nav-item"><a class="nav-link" href="https://pixinvent.ticksy.com/" target="_blank"><i
              class="menu-livicon" data-icon="help"></i><span class="menu-title text-truncate" data-i18n="">Raise
              Support</span></a>
        </li>
        <li class=" nav-item"><a class="nav-link"
            href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/documentation"
            target="_blank"><i class="menu-livicon" data-icon="morph-folder"></i><span
              class="menu-title text-truncate" data-i18n="">Documentation</span></a>
        </li> --}}
      </ul>
    </div>
  </div>

  @yield('content')

  <!-- END: Content-->

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  <!-- BEGIN: Footer-->

  <!-- END: Footer-->


  <!-- BEGIN: Vendor JS-->

  <script src="{{ asset('/app-assets/vendors/js/vendors.min.js') }}"></script>
  <script src="{{ asset('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}"></script>
  <script src="{{ asset('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}"></script>
  <script src="{{ asset('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>
  <script src="{{ asset('/app-assets/vendors/js/forms/select/select2.full.min.js') }}""></script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  <script src="{{ asset('/app-assets/vendors/js/ui/prism.min.js') }}"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="{{ asset('/app-assets/js/scripts/configs/vertical-menu-light.js') }}"></script>
  <script src="{{ asset('/app-assets/js/core/app-menu.js') }}"></script>
  <script src="{{ asset('/app-assets/js/core/app.js') }}"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <!-- END: Page JS-->
  @yield('js')
</body>
<!-- END: Body-->

</html>
