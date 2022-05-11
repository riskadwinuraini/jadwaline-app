@extends('layouts.manager.app')

@section('content')
    <div class="main-content-inner">
        <div class="row">
            <!-- table light start -->
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Thead light</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase bg-light">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Warna Angkot</th>
                                            <th scope="col">Plat Nomor</th>
                                            <th colspan="2">action</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                   @foreach ($transports as $transport)
                                        <tr>
                                            <td>{{ $transport->id }}</td>
                                            <td>{{ $transport->name }}</td>
                                            <td>{{ $transport->car_color}}</td>
                                            <td>{{ $transport->number_plate }}</td>

                                            <td>
                                                <a href="{{ route('transport.edit', $transport->id) }}" class="btn btn-success">edit</a>   
                                                <form action="{{ route('transport.destroy', $transport->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                    <button class="btn btn-danger">Delete</button>
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
            <!-- table light end -->
        </div>
    </div>
@endsection