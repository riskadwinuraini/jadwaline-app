@extends('layouts.admin.app')

@section('title','Tambah Data Manager')
@section('content')
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Manager</h4>
            </div>
            

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <form action="{{ route('admin.account.manage.manager.store')}}" method="POST" autocomplete="off">
                        <div class="form-group">
                            @csrf
                            <label for="basicInput">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="basicInput" name="name" placeholder="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="helperText">E-mail</label>
                            <input type="email" id="helperText" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            <p><small class="text-muted"></small></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="" placeholder="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">SIM</label>
                            <input type="text" name="sim" class="form-control" value ="SIM A" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection