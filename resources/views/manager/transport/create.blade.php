@extends('layouts.manager.app')

@section('content')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('manager.transport.store') }}" autocomplete="off" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" id="" name="name" placeholder="Example input placeholder">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Warna Angkot</label>
                                <input type="text" name="car_color" class="form-control"  placeholder="Example input placeholder">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Plat Nomor</label>
                                <input type="text" name="number_plate" class="form-control"  placeholder="Example input placeholder">
                            </div>
                            <button class="btn btn-primary">create</button>  
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection