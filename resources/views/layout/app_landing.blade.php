<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tsufuk Indonesia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  @include('include.stylelanding')

  <!-- =======================================================
  * Template Name: Day - v4.8.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
@include('include.navbarlanding')
  <!-- ======= Top Bar ======= -->
  @yield('content')
  
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('include.footerlanding')<!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  @include('include.scriptlanding')

</body>

</html>