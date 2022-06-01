@extends('layouts.admin.app')

 
@section('title', 'Edit Profile')

@section('content')
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Profile</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <form action="{{ route('admin.change.password')}}" method="POST">
                        @foreach ($errors->all() as $error)
                         <p class="text-danger">{{ $error }}</p>
                        @endforeach 
                        <div class="form-group">
                            @csrf
                            <label for="basicInput">Current Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="helperText">New Password</label>
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                            </div>
                            <p><small class="text-muted"></small></p>
                        </div>
                        <div class="form-group">
                            <label for="helperText">New Confirm Password</label>
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                            </div>
                            <p><small class="text-muted"></small></p>
                        </div>
                    </div>
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