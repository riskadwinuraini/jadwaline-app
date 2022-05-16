@extends('layouts.admin.app')

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
                    <form action="{{ route('admin.account.manage.manager.store')}}" method="POST">
                        <div class="form-group">
                            @csrf
                            <label for="basicInput">Name</label>
                            <input type="text" class="form-control" id="basicInput" name="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="helperText">E-mail</label>
                            <input type="text" id="helperText" class="form-control" name="email" placeholder="email">
                            <p><small class="text-muted"></small></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control" id="" placeholder="password">
                        </div>
                        <div class="form-group">
                            <label for="">SIM</label>
                            <input type="text" name="sim" class="form-control" value ="SIM A">
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