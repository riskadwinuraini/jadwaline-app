@extends('layouts.app')

@section('content')
<div class="main-content">
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" Value="{{ Auth::user()->email }}"
                        id="exampleFormControlInput1" placeholder="name@example.com"Disabled>
                        </div>
                        <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">name</label>
                        <input type="text" class="form-control" Value="{{ Auth::user()->name }}"
                        id="exampleFormControlInput1" placeholder=""Disabled>
                        </div>
                    </div>
                </div>
            </div>
            </div>
@endsection