@extends('layouts.main')

@section('content')
  <div class="container">
    <div class="row me-1 ms-1">
      <div class="position-relative overflow-hidden text-center bg-dark" style="background-image: url({{ asset('images/tentang.jpg') }}); background-repeat: no-repeat;
                background-position: center; background-size: cover; height: 500px;">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 fw-normal p-5 mt-5" style="color: WHITE; font-weight:bold">PUNTEUT</h1>
        </div>
      </div>
    </div>

    <h1 class="pemuka text-center" style="color:#000957; font-weight: bold;">PEMUKA GAMPONG</h1>
    <div class="row p-5">
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

    <h1 class="solusi text-center mb-4" style="color:#000957; font-weight: bold;">SOLUSI KITA</h1>
    <div class="accordion accordion-flush ms-5 mt-4" id="accordionFlushExample">
      <div class="accordion-item mb-3">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Masukan
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
        </div>
      </div>

      <div class="accordion-item mb-3">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Masukan
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
        </div>
      </div>

      <div class="accordion-item mb-3">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Masukan
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
        </div>
      </div>
    </div>
  </div>
@endsection
