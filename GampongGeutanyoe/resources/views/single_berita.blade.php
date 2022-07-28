@extends('layouts.main')

@section('content')
  <article>
    <h1 class="card-title" style="text-align: center; ">{{ $berita->judul }}</h1>
    <div class="card-body mt-3">
      <img src="{{ asset('images/sungai.jpg') }}" class="card-img-top" height="300px">
      <p class="card-text mt-4">{{ $berita['isi'] }}</p>
    </div>
  </article>

  <a href="/berita" class="btn btn-dark mt-4">BACK</a>
@endsection
