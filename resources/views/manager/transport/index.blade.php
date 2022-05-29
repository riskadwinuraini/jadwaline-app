@extends('layouts.manager.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">
                    <a href="{{ route('manager.transport.create')}}" class="btn btn-primary"> Tambah data</a>
                </h4>
                <div class="table-responsive">
                  <table class="table table-striped" id="myTable">
                    <thead>
                      <tr>
                        <th>
                          Name
                        </th>
                        <th>
                            Car Colors
                        </th>
                        <th>
                            Number Plate
                        </th>
                        {{-- <th>
                            Car Code
                        </th> --}}
                        <th>
                            User
                        </th>
                        <th>
                            Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($transports as $item)
                            <tr>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->car_color}}</td>
                                <td>{{ $item->number_plate}}</td>
                                <td>{{ $item->user->name}}</td>
                                <td class="justify-content-between">
                                    <a href="{{ route('manager.transport.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                                    <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="/manager-area/transport/destroy/{{$item->id}}">
                                      {{-- <i class="fa fa-trash"></i> --}}
                                      Hapus
                                    </a>
                                    {{-- <form method="POST" action="{{ route('manager.transport.destroy', $item->id) }}">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger">Hapus</button>
                                  </form> --}}
                                    {{-- <a href="{{ route('manager.transport.destroy', $item->id)}}"></a> --}}
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
@endsection
@push('script')
    <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
@endpush