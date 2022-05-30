@extends('layouts.manager.app')

@section('content')
<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card tale-bg">
      <div class="card-people mt-auto">
        <img src="/manager/images/dashboard/people.svg" alt="people">
        <div class="weather-info">
          <div class="d-flex">
            <div>
              <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
            </div>
            <div class="ml-2">
              <h4 class="location font-weight-normal">Bondowoso</h4>
              <h6 class="font-weight-normal">Belindungan</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin transparent">
    <div class="row">
      <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-tale">
          <div class="card-body">
            <p class="mb-4">Data Angkutan</p>
            <p class="fs-30 mb-2">{{ $countDataAngkutan}}</p>
            <p>(total data angkutan)</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-dark-blue">
          <div class="card-body">
            <p class="mb-4">Jadwal Angkutan</p>
            <p class="fs-30 mb-2">{{ $countScheduleAngkutan}}</p>
            <p>(7 hari)</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
        <div class="card card-light-blue">
          <div class="card-body">
            <p class="mb-4">Reviews</p>
            <p class="fs-30 mb-2">10</p>
            <p>(30 days)</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 stretch-card transparent">
        <div class="card card-light-danger">
          <div class="card-body">
            <p class="mb-4">Profile</p>
            <p class="fs-30 mb-2">{{ $countUserAngkutan}}</p>
            <p>akun aktif</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection