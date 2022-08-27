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
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/forms/select/select2.min.css') }}">
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
  @include('layouts.header')
  <!-- END: Header-->


  <!-- BEGIN: Main Menu-->
  @include('layouts.sidebar')
  <!-- END: Main Menu-->

  <!-- BEGIN: Content-->
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
  <script src="{{ asset('app-assets/js/scripts/forms/select/form-select2.js') }}"></script>
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
