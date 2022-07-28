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
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" required autofocus>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="nama" required>
              </div>
              <div class="mb-3">
                <label for="telp" class="form-label">No. Hp</label>
                <div class="input-group">
                  <span class="input-group-text">+62</span>
                  <input type="telp" class="form-control" id="telp" name="telp" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="surat" class="form-label">Jenis Surat</label>
                <select class="form-select" id="surat" name="surat" required>
                  <option selected>Pilih Jenis Surat</option>
                  <option value="sktmp">SKTMP</option>
                  <option value="sk">Surat Keterangan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="kk" class="form-label">Upload Kartu Keluarga (KK)</label>
                <input type="file" class="form-control" id="kk" name="kk" required>
              </div>
              <div class="mb-3">
                <label for="ktp" class="form-label">Upload Kartu Tanda Penduduk (KTP)</label>
                <input type="file" class="form-control" id="ktp" name="ktp">
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-primary">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
