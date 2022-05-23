@extends('layouts.manager.app')

@section('content')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('manager.transport.update', $transportsedit->id) }}" autocomplete="off" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                id="" name="name" value="{{$transportsedit->name}}"placeholder="Example input placeholder">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Warna Angkot</label>
                                <input type="text" name="car_color" class="form-control  @error('car_color') is-invalid @enderror" value="{{$transportsedit->car_color}}"placeholder="Example input placeholder">
                                @error('car_color')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Plat Nomor</label>
                                <input type="text" name="number_plate" readonly class="form-control @error('number_plate') is-invalid @enderror" value="{{$transportsedit->number_plate}}"placeholder="Example input placeholder">
                                @error('number_plate')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button class="btn btn-primary">Update</button>  
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection