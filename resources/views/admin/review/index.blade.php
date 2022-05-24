@extends('layouts.admin.app')

@section('title', 'review')

@section('content')
        <div class="row">
            <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Akun Review</h4>
                
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-hover progress-table text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">User</th>
                                                <th scope="col">Review</th>
                                                <th scope="col">Star</th>
                                                <th scope="col">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($reviews as $review)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$review->user->name}}</td>
                                                    <td>{{$review->text}}</td>
                                                    <td>{{$review->rate}}</td>
                                                    <td>
                                                        <a href="/admin-area/review/hapus/{{ $review->id }}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm">
                                                        <i data-feather="trash-2" width="20"></i></a>
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
@endsection