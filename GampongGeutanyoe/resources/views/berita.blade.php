@extends('layouts.main')

@section('content')
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/berita.jpg') }}" height="500px" class="img-c d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/orang.jpg') }}" height="500px" class="img-c d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/sawah.jpg') }}" height="500px" class="img-c d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="container">
    <div class="row mb-5">
      <div class="col">
        <div class="kategori dropdown mt-5">
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kategori Berita
          </button>
          <ul class="dropdown-menu">
            @foreach ($kategoris as $kategori)
              <li><a class="list-ktgr dropdown-item" href="#">{{ $kategori->nama }}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 g-md-4">
      @foreach ($beritas as $berita)
        <div class="col">
          <div class="card rounded-10 p-3">
            <div class="position-absolute badge bg-light mx-3 my-3">
              <a class="text-decoration-none text-dark" href="/beritas?kategori={{ $berita->kategori->slug }}">{{ $berita->kategori->nama }}</a>
            </div>
            <img src="https://source.unsplash.com/300x200/?{{ $berita->kategori->nama }}" class="card-img-top rounded-10" alt="{{ $berita->kategori->nama }}">
            <div class="card-body p-0 mt-3">
              <h5 class="card-title m-0">
                <a class="text-decoration-none link-dark" href="/beritas/{{ $berita->slug }}">
                  {{ $berita->judul }}
                </a>
              </h5>
              <p class="card-text mt-1"><small class="text-muted">{{ $berita->created_at->diffForHumans() }}</small></p>
              <p class="card-text">{{ $berita->excerpt }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="d-flex justify-content-end mt-4">
      {{ $beritas->onEachSide(6)->links() }}
    </div>
  </div>
@endsection
