@extends('layouts.main')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="position-relative overflow-hidden text-center bg-dark" style="background-image: url({{ asset('images/hand.jpg') }}); background-repeat: no-repeat; background-position: center; background-size: cover; height: 500px;">
          <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal p-5 mt-5" style="color: WHITE; font-weight:bold">SOLUSI KITA</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="kendala row">
      <h1 class="text-center mb-5" style="color:#000957; font-weight: bold;">KENDALA - KENDALA</h1>
      <div class="col col-md-4">
        <div class="card" style="border-radius:15px; border-style:none;">
          <img class="img-kendala" src="{{ asset('images/keluarga.jpg') }}" alt="" style="border-radius: 15px;">
          <h3 class="p-2">KELUARGA</h3>
          <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
          </p>
        </div>
      </div>

      <div class="col col-md-4">
        <div class="card" style="border-radius:15px; border-style:none;">
          <img class="img-kendala" src="{{ asset('images/izin.jpg') }}" alt="" style="border-radius: 15px;">
          <h3 class="p-2">IZIN 1 X 24 JAM</h3>
          <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
          </p>
        </div>
      </div>

      <div class="col col-md-4">
        <div class="card" style="border-radius:15px; border-style:none;">
          <img class="img-kendala" src="{{ asset('images/surat.jpg') }}" alt="" style="border-radius: 15px;">
          <h3 class="p-2">SURAT MENYURAT</h3>
          <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
          </p>
        </div>
      </div>
    </div>

    <div class="administrasi p-4">
      <div class="row flex-wrap" style="background-color: #012258; color:white">
        <div class="col p-5">
          <h4>ADMINISTRASI</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          <a class="btn btn-adm px-4" href="/administrasi/form-adm">Request</a>

          <h4 style="margin-top: 55px;">KONTAK</h4>
          <a class="btn btn-adm px-4" href="#">
            <i class="fa-brands fa-whatsapp"></i>
            +62 813 6441 2394
          </a>
        </div>
        <div class="col p-5">
          <h4>MASUKAN</h4>
          <form action="/administrasi/masukan" method="post">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="mb-3">
              <label for="masukan" class="form-label">Masukan</label>
              <textarea class="form-control" name="masukan" id="masukan" placeholder="Tuliskan masukan anda untuk gampong kami" rows="3" required></textarea>
            </div>
            <div class="text-end">
              <button type="submit" class="btn btn-adm px-4">Kirim</button>
            </div>
          </form>
        </div>

        <div class="col p-5">
          <h4>PERIZINAN</h4>
          <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
          <a class="btn btn-adm px-4" href="/administrasi/form-izin">Request</a>
        </div>
      </div>
    </div>
  </div>
@endsection
