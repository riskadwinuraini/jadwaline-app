@extends('layouts.manager.app')

@push('style')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/tom-select@2.0.0-rc.4/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.0.0-rc.4/dist/js/tom-select.complete.min.js"></script>

@endpush
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
                            <div class="mb-3">
                                <label class="form-label">Penanggung jawab</label>
                                <select id="select-beast" class="" name="user_id"  autocomplete="off"> 
                                    <option value="">Select a Page...</option>
                                    @foreach ($users as $user)
                                        <option value="{{$user->id}}">{{ $user->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button class="btn btn-primary">create</button>  
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
    new TomSelect("#select-beast",{
        create: true,
        sortField: {
            field: "text",
            direction: "asc"
        }
    });
    </script>
@endpush