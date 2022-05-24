@extends('layouts.manager.app')

@push('style')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/tom-select@2.0.0-rc.4/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.0.0-rc.4/dist/js/tom-select.complete.min.js"></script>

@endpush
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">
                    {{-- <a href="{{ route('manager.schedules.create')}}" class="btn btn-primary"> Tambah data</a> --}}
                </h4>
                <form action="{{ route('manager.schedules.store') }}" autocomplete="off" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Transport</label>
                        <select id="select-beast" class="@error('user_id') is-invalid @enderror" name="user_id"  autocomplete="off"> 
                            <option value="">Select a Page...</option> 

                            {{-- @foreach ($users as $user)
                                <option value="{{$user->id}}">{{ $user->name}}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">from</label>
                        <input type="text" name="from" class="form-control"  @error('from') is-invalid @enderror" placeholder="Example input placeholder">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                            <label for="" class="form-label">to</label>
                            <input type="text" class="form-control @error('to') is-invalid @enderror" id="" name="to" placeholder="Example input placeholder">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Start time</label>
                            <input type="text" name="start_time" class="form-control"  @error('start_time')is-invalid @enderror" placeholder="Example input placeholder">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">End Time</label>
                            <input type="text" name="end_time" class="form-control"  @error('end_time') is-invalid @enderror" placeholder="Example input placeholder">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
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