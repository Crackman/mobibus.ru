@extends('layouts.gallery')

@section('description')Распродажа всего всякого для компьютеров. @endsection

@section('title')Распродажа | Mobibus @endsection

@section('content')

  <div class="container">
    <div class="row">

      <h2 class="fw-bold text-center">
        На данные момент товары отсутствуют...
        <a class="nav-link"   href="{{ route('index') }}">
          <i class="fa-solid fa-left-long fa-2x "></i>
        </a>
      </h2>

    </div>
  </div>

@endsection