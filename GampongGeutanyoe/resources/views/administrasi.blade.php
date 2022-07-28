@extends('layouts.main')

@section('content')
  <div class="container">
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
          <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>

          <a href="/administrasi/form-adm">
            <button class="btn-adm" type="button">
              <p class="p-1" style="text-align: center; margin:auto"> Request</p>
            </button>
          </a>

          <h4 style="margin-top: 55px;">KONTAK</h4>
          <button class="btn-adm" type="button">
            <p class="p-1" style="text-align: center; margin:auto">Telp +62 813 6441 2394</p>
          </button>
        </div>
        <div class="col p-5">
          <h4>MASUKAN</h4>
          <form action="{{ route('solusi.store') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="nama" required>
            </div>
            <div class="mb-3">
              <label for="masukan">Masukan</label>
              <textarea class="form-control" name="masukan" placeholder="Masukan" id="masukan" required></textarea>
            </div>
            <button type="submit" class="btn btn-adm">submit</button>
          </form>
        </div>

        <div class="col p-5">
          <h4>PERIZINAN</h4>
          <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </P>
          <a href="/administrasi/form-izin">
            <button class="btn-adm" type="button">
              <p class="p-1" style="text-align: center; margin:auto"> Request</p>
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
