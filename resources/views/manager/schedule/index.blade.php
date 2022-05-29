@extends('layouts.manager.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">
                    <a href="{{ route('manager.schedules.create')}}" class="btn btn-primary"> Tambah data</a>
                </h4>
                <div class="table-responsive">
                  <table class="table table-striped" id="myTable">
                    <thead>
                      <tr>
                        <th>
                          No.
                        </th>
                        <th>
                          Transport
                        </th>
                        <th>
                          rute berangkat
                        </th>
                        <th>
                          rute pulang
                        </th>
                        <th>
                            jam berangkat
                        </th>
                        <th>
                            Jam pulang
                        </th>
                        <th>
                            Hari
                        </th>
                        <th>
                            Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules as $schedule)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $schedule->transport->name}}</td>
                                <td>{{ $schedule->from}}</td>
                                <td>{{ $schedule->to}}</td>
                                <td>{{ $schedule->start_time}}</td>
                                <td>{{ $schedule->end_time}}</td>
                                <td>{{ $schedule->day}}</td>
                                <td>
                                    <a href="{{ route('manager.schedules.edit', $schedule->id)}}" class="btn btn-info btn-sm">Edit</a>
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="/manager-area/schedules/destroy/{{$schedule->id}}">
                                      Hapus
                                    </a>
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