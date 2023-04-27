
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets5/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets5/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets5/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets5/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets5/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets5/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets5/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets5/css/style.css" rel="stylesheet">
  <!-- <link href="assets7/css/style.css" rel="stylesheet"> -->

  
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
      <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{route('pageAdmin')}}" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ Auth::user()->name }}</h6>
              <span>{{ Auth::user()->profession }}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('profile.edit')}}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
            <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="dropdown-item d-flex align-items-center" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                       <i class="bi bi-box-arrow-right"></i><span> {{ __('Log Out') }}</span>
                     </a>
                </form> 
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="{{route('pageAdmin')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-heading">Pages</li>
 <!-- End convocation -->
 <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('convocation')}}">
      <i class="bi bi-menu-button-wide"></i>
      <span>Convoction</span>
    </a>
  </li><!-- End convocation -->
 
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('profileAdmin.index')}}">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->



</ul>

</aside><!-- End Sidebar-->
<main id="main" class="main">
<div class="d-flex">@yield('cont')</div>
</main>
  <!-- Vendor JS Files -->
  <script src="assets5/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets5/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets5/vendor/chart.js/chart.umd.js"></script>
  <script src="assets5/vendor/echarts/echarts.min.js"></script>
  <script src="assets5/vendor/quill/quill.min.js"></script>
  <script src="assets5/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets5/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets5/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets5/js/main.js"></script>

</body>

</html>


