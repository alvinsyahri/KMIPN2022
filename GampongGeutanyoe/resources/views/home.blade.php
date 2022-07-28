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
          <img src="{{ asset('images/sungai.jpg') }}" height="500px" class="img-c d-block w-100" alt="...">
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

  <section id="about-us">
    <div class="container">
      <div class="row my-5 gap-3 gap-md-0">
        <div class="col-md-5">
          <img src="{{ asset('images/sawah.jpg') }}" class="img-fluid rounded-3" alt="...">
        </div>
        <div class="col-md-7">
          <h6 class="text-muted">ABOUT US</h6>
          <h2 class="card-title fw-bold">GAMPONG PUNTEUT</h2>
          <p class="card-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam aliquid consectetur adipisci cupiditate nostrum et nemo iste blanditiis consequuntur!
          </p>
          <a href="/tentang" class="btn btn-jelajahi rounded-pill text-white px-4 py-2">JELAJAHI</a>
        </div>
      </div>
    </div>
  </section>


  <div class="container my-5">
    <h2 class="text-center fw-bold">BERITA TERPOPULER</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 g-md-4">
      @foreach ($beritas->only([1, 2, 3, 4, 5, 6]) as $berita)
        <div class="col">
          <div class="card rounded-3 p-3 border-0">
            <div class="position-absolute badge bg-light mx-3 my-3">
              <a class="text-decoration-none text-dark" href="/berita?kategori={{ $berita->kategori->slug }}">{{ $berita->kategori->nama }}</a>
            </div>
            <img src="https://source.unsplash.com/300x200/?{{ $berita->kategori->nama }}" class="card-img-top rounded-3" alt="{{ $berita->kategori->nama }}">
            <div class="card-body p-0 mt-3">
              <h5 class="card-title m-0">
                <a class="text-decoration-none link-dark" href="/beritas/{{ $berita->slug }}">
                  {{ $berita->judul }}
                </a>
              </h5>
              <p class="card-text mt-1"><small class="text-muted">{{ $berita->created_at->diffForHumans() }}</small></p>
              <p class="card-text">{{ $berita->excerpt }} <a class="text-decoration-none" href="/beritas/{{ $berita->slug }}">Read More</a></p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>


  <section id="berita-terkini">
    <div class="container my-5">
      <h1 class="text-center fw-bold text-white"><br>BERITA TERKINI</h1>
      <p class="text-center text-white mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's <br> standard dummy text ever since the 1500s</p>
      <div class="row gap-3 gap-md-2 gap-lg-0">
        @foreach ($beritas->only([1, 2, 3]) as $berita)
          <div class="col-6 col-md-4">
            <div class="card rounded-3 p-3 border-0">
              <div class="position-absolute badge bg-light mx-3 my-3">
                <a class="text-decoration-none text-dark" href="/berita?kategori={{ $berita->kategori->slug }}">{{ $berita->kategori->nama }}</a>
              </div>
              <img src="https://source.unsplash.com/300x200/?{{ $berita->kategori->nama }}" class="card-img-top rounded-3" alt="{{ $berita->kategori->nama }}">
              <div class="card-body p-0 mt-3">
                <h5 class="card-title m-0">
                  <a class="text-decoration-none link-dark" href="/beritas/{{ $berita->slug }}">
                    {{ $berita->judul }}
                  </a>
                </h5>
                <p class="card-text mt-1"><small class="text-muted">{{ $berita->created_at->diffForHumans() }}</small></p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <div class="contact-us">
      <div class="row">
        <div class="col p-3 text-center">
          <span class="text-white">LOOKING INFORMATION ACURATE FOR YOU</span>
        </div>
        <div class="col p-2 text-center">
          <a class="btn btn-primary btn-contact-us rounded-3" href="#" role="button">
            Contact Us</a>
        </div>
      </div>
    </div>
  </section>


  <div class="my-5 pemuka">
    <h2 class="text-center fw-bold">PEMUKA GAMPONG</h2>
    <div class="row p-4">
      <div class="col">
        <div class="card p-1" style="width: 250px; border-radius:15px; background-color:#C84B31 ;">
          <img src="{{ asset('images/user.jpg') }}" alt="" class="card-img-top shadow" style="border-radius:16px;">
          <div class="card-body" style="border-radius:16px;">
            <h5 class="card-title text-light">GEUCHIK</h5>
            <p>PLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card p-1" style="width: 250px; border-radius:15px; background-color:#C84B31 ;">
          <img src="{{ asset('images/user.jpg') }}" alt="" class="card-img-top shadow" style="border-radius:16px;">
          <div class="card-body" style="border-radius:16px;">
            <h5 class="card-title text-light">SEKRETARIS DESA</h5>
            <p>PLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card p-1" style="width: 250px; border-radius:15px; background-color:#C84B31 ;">
          <img src="{{ asset('images/user.jpg') }}" alt="" class="card-img-top shadow" style="border-radius:16px;">
          <div class="card-body" style="border-radius:16px;">
            <h5 class="card-title text-light">BENDAHARA DESA</h5>
            <p>PLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card p-1" style="width: 250px; border-radius:15px; background-color:#C84B31 ;">
          <img src="{{ asset('images/user.jpg') }}" alt="" class="card-img-top shadow" style="border-radius:16px;">
          <div class="card-body" style="border-radius:16px;">
            <h5 class="card-title text-light">TUHA 4</h5>
            <p>PLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
