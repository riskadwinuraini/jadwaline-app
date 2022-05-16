@extends('layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="row">
        <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Reviews DataTable</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">User</th>
                                                    <th scope="col">Rate</th>
                                                    <th scope="col">Text Review</th>
                                                    <th scope="col" colspan="2">action</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                        @foreach ($reviews as $review)
                                                <tr>
                                                    <td>{{ $loop->iteration}}</td>
                                                    <td>{{ $review->user->name }}</td>
                                                    <td>{{ $review->rate }}</td>
                                                    <td>{{ $review->text}}</td>

                                                    <td>   
                                                        <form action="{{ route('review.destroy', $review->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                            <button class="btn btn-danger">hapus</button>
                                                        </form>
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