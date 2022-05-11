<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin Dashboard</title>

    <link rel="stylesheet" href="/admin/css/bootstrap.css">

    <link rel="stylesheet" href="/admin/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="/admin/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/admin/css/app.css">
    <link rel="shortcut icon" href="/admin/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
      @include('layouts.admin.components.sidebar')
        <div id="main">
@include('layouts.admin.components.navbar')

            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Dashboard</h3>
                    <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
                </div>
                <section class="section">
                    <div class="row mb-2">
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>Today's Bookings</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <p>$50 </p>
                                            </div>
                                        </div>
                                        <div class="chart-wrapper">
                                            <canvas id="canvas1" style="height:100px !important"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>Total Bookings</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <p>$532,2 </p>
                                            </div>
                                        </div>
                                        <div class="chart-wrapper">
                                            <canvas id="canvas2" style="height:100px !important"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>ORDERS</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <p>1,544 </p>
                                            </div>
                                        </div>
                                        <div class="chart-wrapper">
                                            <canvas id="canvas3" style="height:100px !important"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>Statistika Pendapatan</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <p>423 </p>
                                            </div>
                                        </div>
                                        <div class="chart-wrapper">
                                            <canvas id="canvas4" style="height:100px !important"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class='card-heading p-1 pl-3'>Penumpang Perbulan</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <div class="pl-3">
                                                <h1 class='mt-5'>$21,102</h1>
                                                <p class='text-xs'><span class="text-green"><i data-feather="bar-chart"
                                                            width="15"></i> +19%</span> than last month</p>
                                                <div class="legends">
                                                    <div class="legend d-flex flex-row align-items-center">
                                                        <div class='w-3 h-3 rounded-full bg-info me-2'></div><span
                                                            class='text-xs'>Last Month</span>
                                                    </div>
                                                    <div class="legend d-flex flex-row align-items-center">
                                                        <div class='w-3 h-3 rounded-full bg-blue me-2'></div><span
                                                            class='text-xs'>Current Month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-12">
                                            <canvas id="bar"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Penumpang hari ini</h4>
                                    <div class="d-flex ">
                                        <i data-feather="download"></i>
                                    </div>
                                </div>
                                <div class="card-body px-0 pb-0">
                                    <div class="table-responsive">
                                        <table class='table mb-0' id="table1">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>City</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                           
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header">
                                    <h4>Your Earnings</h4>
                                </div>
                                <div class="card-body">
                                    <div id="radialBars"></div>
                                    <div class="text-center mb-5">
                                        <h6>From last month</h6>
                                        <h1 class='text-green'>+$2,134</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
</body>

</html>
