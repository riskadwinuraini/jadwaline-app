@extends('layouts.admin.guest')

@section('content')
<div class="text-center mb-5">
    <img src="{{ asset('admin/images/Logo_J.png')}}" height="48" class='mb-4'>
    <h3>Sign In</h3>
    <p>Please login to access the JadwaLine.</p>
</div>
<form action="{{ route('admin.login')}}" autocomplete="off" method="POST">
    @csrf
    <div class="form-group position-relative has-icon-left">
        <label for="email">Email</label>
        <div class="position-relative">
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
            <div class="form-control-icon">
                <i data-feather="user"></i>
            </div>
        </div>
    </div>
    <div class="form-group position-relative has-icon-left">
        <div class="clearfix">
            <label for="password">Password</label>
            <a href="auth-forgot-password.html" class='float-end'>
                <small>Forgot password?</small>
            </a>
        </div>
        <div class="position-relative">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
            <div class="form-control-icon">
                <i data-feather="lock"></i>
            </div>
        </div>
    </div>

    <div class='form-check clearfix my-4'>
        <div class="checkbox float-start">
            <input type="checkbox" id="checkbox1" class='form-check-input' @checked(old('remember'))>
            <label for="checkbox1">Remember me</label>
        </div>
    </div>
    <div class="clearfix">
        <button class="btn btn-primary float-end">Login</button>
    </div>
</form>
@endsection
