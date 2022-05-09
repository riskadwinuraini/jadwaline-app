@extends('layouts.admin.guest')

@section('content')
<div class="text-center mb-5">
    <img src="/admin/images/favicon.svg" height="48" class='mb-4'>
    <h3>Sign In</h3>
    <p>Please sign in to continue to Voler.</p>
</div>
<form action="#" autocomplete="off">
    <div class="form-group position-relative has-icon-left">
        <label for="username">Username</label>
        <div class="position-relative">
            <input type="text" class="form-control" id="username">
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
            <input type="password" class="form-control" id="password">
            <div class="form-control-icon">
                <i data-feather="lock"></i>
            </div>
        </div>
    </div>

    <div class='form-check clearfix my-4'>
        <div class="checkbox float-start">
            <input type="checkbox" id="checkbox1" class='form-check-input' >
            <label for="checkbox1">Remember me</label>
        </div>
        <div class="float-end">
            <a href="auth-register.html">Don't have an account?</a>
        </div>
    </div>
    <div class="clearfix">
        <button class="btn btn-primary float-end">Submit</button>
    </div>
</form>
@endsection