<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Dashboard</title>

    <link rel="stylesheet" href="/admin/css/bootstrap.css">

    <link rel="stylesheet" href="/admin/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="/admin/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/admin/css/app.css">
    <link rel="shortcut icon" href="/admin/images/Logo_J.png" type="image/x-icon">
    @stack('style')
</head>

<body>
    <div id="app">
      @include('layouts.admin.components.sidebar')
        <div id="main">
@include('layouts.admin.components.navbar')

            <div class="main-content container-fluid">
                <div class="page-title">
                    {{-- <h3>Dashboard</h3> --}}
                    <p class="text-subtitle text-muted"></p>
                </div>
                <section class="section">
                    @yield('content')
                </section>
            </div>

@include('layouts.admin.components.footer')
        </div>
    </div>
    <script src="/admin/js/feather-icons/feather.min.js"></script>
    <script src="/admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/admin/js/app.js"></script>

    <script src="/admin/vendors/chartjs/Chart.min.js"></script>
    <script src="/admin/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="/admin/js/pages/dashboard.js"></script>

    <script src="/admin/js/main.js"></script>
    
    @stack('scripts')
</body>

</html>
