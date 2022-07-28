@extends('layouts.main')

@section('content')
  <div class="container mb-5 d-flex justify-content-center">
    <div class="row">
      <h1 class="text-center fw-bold mb-4" style="color:#000957;">FORM PERIZINAN</h1>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <form action="dashboard/administrasi/perizinan" method="post">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama"required>
              </div>
              <div class="mb-3">
                <label for="telp" class="form-label">No. Hp</label>
                <div class="input-group">
                  <span class="input-group-text">+62</span>
                  <input type="telp" class="form-control" id="telp" name="telp" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="namalorong" class="form-label">Nama Lorong</label>
                <input type="text" class="form-control" name="nama_lorong" id="nama_lorong" required>
              </div>
              <div class="mb-3">
                <label for="ktp" class="form-label">Upload Kartu Tanda Penduduk (KTP)</label>
                <input type="file" class="form-control" name="ktp" id="ktp" required>
              </div>
              <div class="mb-3">
                <label for="izin">Permohonan Izin</label>
                <textarea class="form-control" name="izin" id="izin" required></textarea>
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
