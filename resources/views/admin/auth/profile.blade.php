@extends('layouts.admin.app')

 
@section('title', 'Edit Profile')

@section('content')
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                {{-- <h4 class="card-title">Edit Profile</h4> --}}
            </div>
            

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <form action="{{ route('admin.update.profile', Auth::user()->id)}}" method="POST">
                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <label for="basicInput">Name</label>
                            <input type="text" class="form-control" id="basicInput" name="name" placeholder="name" value="{{ Auth::user()->name}}">
                        </div>
                        <div class="form-group">
                            <label for="helperText">E-mail</label>
                            <input type="text" id="helperText" value="{{ Auth::user()->email}}" class="form-control" name="email" placeholder="email">
                            <p><small class="text-muted"></small></p>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="">SIM</label>
                            <input type="text" name="sim" class="form-control" 
                            value ="{{ Auth::user()->sim}}">
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection