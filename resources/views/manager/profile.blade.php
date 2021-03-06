@extends('layouts.manager.app')

@section('content')

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if(session()->get('message'))
                        <div class="alert alert-success" role="alert">
                          <strong>Success: </strong>{{session()->get('message')}}
                        </div>
                        @endif
                        <div class="card-title">Edit Profile</div>
                        <form action="{{ route('manager.update.profile', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <input accept="image/*"  name="photo" type="file" id="imgInp"/>
                                <img id="blah" src="/manager/images/icon-user.png"  alt="Your image" class="rounded-circle" width="123"/>
                            </div>  
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" value="{{ Auth::user()->email }}"
                                id="exampleFormControlInput1" name="email" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}"
                                id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="card-text"> 
                              <button class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
@push('script')
<script>
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
@endpush