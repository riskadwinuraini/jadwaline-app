<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>JadwaLine</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/manager/vendors/feather/feather.css">
  <link rel="stylesheet" href="/manager/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/manager/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="/manager/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/manager/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="/manager/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/manager/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/manager/images/logo-Logo_J.png" />

  @stack('style')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
@include('layouts.manager.components.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.manager.components.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Selamat Datang, {{Auth::user()->name}}</h3>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                 </div>
                </div>
              </div>
            </div>
          </div>
        @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright 2022. By: Kel.VII
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('manager/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/manager/vendors/chart.js/Chart.min.js"></script>
  <script src="/manager/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="/manager/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="/manager/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/manager/js/off-canvas.js"></script>
  <script src="/manager/js/hoverable-collapse.js"></script>
  <script src="/manager/js/template.js"></script>
  <script src="/manager/js/settings.js"></script>
  <script src="/manager/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/manager/js/dashboard.js"></script>
  <script src="/manager/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

  @stack('script')
</body>

</html>

