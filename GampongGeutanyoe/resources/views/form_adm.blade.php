@extends('layouts.main')

@section('content')
  <div class="container mb-5 d-flex justify-content-center">
    <div class="row">
      <h1 class="text-center mb-5" style="color:#000957; font-weight: bold;">FORM ADMINISTRASI</h1>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('data-surat.store') }}" method="post">
              @csrf
              <div class="mb-4">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-4">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" required>
              </div>
              <div class="mb-4">
                <label for="telp" class="form-label">No. Hp</label>
                <input type="telp" class="form-control" id="telp" name="telp" required>
              </div>
              <div class="mb-4">
                <label for="surat" class="form-label">Jenis Surat</label>
                <select class="form-select" id="surat" name="surat" required>
                  <option selected>Pilih Jenis Surat</option>
                  <option value="sktmp">SKTMP</option>
                  <option value="SK">Surat Keterangan</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="kk" class="form-label">Upload Kartu Keluarga (KK)</label>
                <input class="form-control" type="file" id="kk" name="kk">
              </div>
              <div class="mb-4">
                <label for="ktp" class="form-label">Upload Kartu Tanda Penduduk (KTP)</label>
                <input class="form-control" type="file" id="ktp" name="ktp">
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-primary mt-4">KIRIM</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
