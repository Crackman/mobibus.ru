@extends('layouts.img')

@section('content')
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <h2>Create</h2>
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <a href="{{ route('img.create') }}" class="btn btn-success">Create</a>
            <h6 class="m-0 font-weight-bold text-primary">Create Image</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="card-body">
      <form action="{{ route("img.store") }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="Name">Name</label>
          <input type="text" name="name" class="form-control" placeholder="name">
          @if($errors->has('name'))
            <strong class="text-danger">{{ $errors->first('name') }}</strong>
          @endif
        </div>

        <div class="form-group">
          <div class="mb-3">
            <label>image file</label>
            <input type="file" name="image" class="form-control">
            @if($errors->has('image'))
              <strong class="text-danger">{{ $errors->first('image') }}</strong>
            @endif
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
            <span class="sr-only"></span>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

  </div>
@endsection