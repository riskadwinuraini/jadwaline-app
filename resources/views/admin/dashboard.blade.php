@extends('layouts.admin.app')

@section('title', 'Dashboard')

@push('style')
    <link rel="stylesheet" href="/manager/vendors/datatables.net-bs4/dataTables.bootstrap4.css">`
    <link rel="stylesheet" type="text/css" href="/manager/js/select.dataTables.min.css">
@endpush

@section('content')
<div class="row mb-2">
    <div class="col-lg-4 col-md-3">
        <div class="card card-statistic">
            <div class="card-body p-0">
                <div class="d-flex flex-column">
                    <div class='px-3 py-3 d-flex justify-content-between'>
                        <h3 class='card-title'>Today's Booking</h3>
                        <div class="card-right d-flex align-items-center">
                            <p> {{ $count }} </p>
                        </div>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="canvas1" style="height:100px !important"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-3">
        <div class="card card-statistic">
            <div class="card-body p-0">
                <div class="d-flex flex-column">
                    <div class='px-3 py-3 d-flex justify-content-between'>
                        <h3 class='card-title'>Jumlah pengguna</h3>
                        <div class="card-right d-flex align-items-center">
                            <p> {{ $count }} </p>
                        </div>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="canvas2" style="height:100px !important"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-3">
        <div class="card card-statistic">
            <div class="card-body p-0">
                <div class="d-flex flex-column">
                    <div class='px-3 py-3 d-flex justify-content-between'>
                        <h3 class='card-title'>Total Pemesanan</h3>
                        <div class="card-right d-flex align-items-center">
                            <p> {{ $count }} </p>
                        </div>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="canvas3" style="height:100px !important"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class='card-heading p-1 pl-3'>Jadwal Transport</h3>
                <p class='text-xs'>
                    <span class="text-green">
                     Informasi waktu hari ini: <span class="fw-bold" id="date-time"></span></p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 col-12">
                        <div class="pl-3">
                            <h4 class='mt-2'>Status Line</h4>
                           
                            <div class="legends">
                                <div class="legend d-flex flex-row align-items-center">
                                    <div class='w-3 h-3 rounded-full bg-yellow me-2'></div><span
                                        class='text-xs'>Aktif (07:00 - 12:00)</span>
                                </div>
                                <div class="legend d-flex flex-row align-items-center">
                                    <div class='w-3 h-3 rounded-full bg-red me-2'></div><span
                                        class='text-xs'>Istirahat (12:00-12:30)</span>
                                </div>
                                <div class="legend d-flex flex-row align-items-center">
                                    <div class='w-3 h-3 rounded-full bg-success me-2'></div><span
                                        class='text-xs'>Kembali Bekerja (12:45 - 16:00)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-12">
                        <table class="table table-striped table-responsive" id="myTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Transport</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Day</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($schedules as $schedule)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $schedule->transport->name}}</td>
                                            <td>{{ $schedule->from}}</td>
                                            <td>{{ $schedule->to}}</td>
                                            <td>{{ $schedule->start_time}}</td>
                                            <td>{{ $schedule->end_time}}</td>
                                            <td>{{ $schedule->day}}</td>
                                           <td>
                                               @php
                                               
                                                $today = date("H:i:s");

                                                $activeStartTime = "07:00:00";
                                                $activeEndTime="17:45:00";

                                                $workTime = strtotime($activeStartTime) - strtotime($activeEndTime);

                                                // echo $workTime;exit;
                                                $breakWorkTime = "12:00:00";
                                                $breakEndTime= "12:30:00";

                                                $breakTime = strtotime($breakWorkTime) - strtotime($breakEndTime);

                                                $backToWorkTime = strtotime("12:45:00") - strtotime("16:00:00"); 

                                                $bg = '';
                                                $text = '';

                                                switch ($today) {
                                                    case $workTime:
                                                        $bg = 'yellow';
                                                        $text = 'Aktif';
                                                        break;
                                                    
                                                    case $breakTime:
                                                        $bg = 'red';
                                                        $text = 'Istirahat';
                                                        break;

                                                    case $backToWorkTime:
                                                        $bg = 'success';
                                                        $text = 'Bekerja kembali';
                                                        break;
                                                }

                                                echo "<span class='badge bg-success'>$text</span>";

                                                @endphp
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@push('scripts')
<script src="/manager/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="/manager/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script>
    // Function to format 1 in 01
    const zeroFill = n => {
        return ('0' + n).slice(-2);
    }

    // Creates interval
    const interval = setInterval(() => {
        // Get current time
        const now = new Date();

        // Format date as in mm/dd/aaaa hh:ii:ss
        const dateTime = zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now.getSeconds());

        // Display the date and time on the screen using div#date-time
        document.getElementById('date-time').innerHTML = dateTime;
    }, 1000);
</script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
  </script>
@endpush