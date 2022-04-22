@extends('layouts.img')

@section('content')
  <div class="container mt-5">
    <div class="row">
      @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          {{ $message }}
        </div>
      @endif
      <div class="col-md-12">
        <h2>Laravel image Upload full crud with spatie mediaLibrary package</h2>
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <a href="{{ route('img.create') }}" class="btn btn-success">Create</a>
            <h6 class="m-0 font-weight-bold text-primary">Image List</h6>
          </div>
        </div>
        <table class="table">
          <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($images as $image)
            <tr>
              <td>{{ $image->id }}</td>
              <td>{{ $image->name }}</td>
              <td><img src="{{ $image->getFirstMediaUrl('images') }}" width="100" height="100"></td>
{{--              <td><img src="{{ $image->getFirstMediaUrl('images', 'thumb') }}" width="100" height="100"></td>--}}
              <td>
                <a class="btn btn-xs btn-primary" href="{{ route('img.edit',$image->id) }}">
                  Edit
                </a>
              </td>
              <td>
                <form action="{{ route('img.destroy',$image->id) }}" method="POST" onsubmit="return confirm('{{ trans('are You Sure ? ') }}');"
                      style="display: inline-block;">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                </form>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>


  </div>
@endsection