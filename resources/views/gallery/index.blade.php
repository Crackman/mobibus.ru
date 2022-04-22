@extends('layouts.gallery')

@section('description')Галлерея разных убитых компьютеров. @endsection

@section('title')Фотогаллерея | Mobibus @endsection

@section('content')

  <div class="container">
    <h1 class="h3 text-center my-4"></h1>
    <div class="row">

      @foreach($images as $image)

      <div class="col-lg-3 col-md-4 col-6 thumb">
        <a data-fancybox="gallery" href="{{$image->getFirstMediaUrl('images', 'full-size')}}">
          <img class="img-fluid" src="{{$image->getFirstMediaUrl('images', 'thumb')}}" alt="{{ $image->name }}">
        </a>
      </div>

      @endforeach

    </div>
  </div>

@endsection