@extends('layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Akun Sopir dan Manager</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-hover progress-table text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">status</th>
                                                <th scope="col">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($accounts as $account)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$account->name}}</td>
                                                    <td>{{$account->email}}</td>
                                                    <td>
                                                        <span class="status-p bg-{{ ($account->sim != null) ? 'primary' : 'danger'}}">
                                                            {{ ($account->sim != null) ? 'approved' : 'not approved'}}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection