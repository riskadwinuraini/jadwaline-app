@extends('layouts.app')

@section('content')
    <div class="main-content-inner">
        <div class="row">
        <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{route('transport.create')}}" class="btn btn-primary">Tambah</a>
                                {{-- <h4 class="header-title">Progress Table</h4> --}}
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Warna Angkot</th>
                                                    <th scope="col">Plat Nomor</th>
                                                    <th scope="col" colspan="2">action</th>
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