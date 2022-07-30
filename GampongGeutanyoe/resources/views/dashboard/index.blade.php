@extends('dashboard.layouts.main')

@section('content')
  <div class="containter">
    <div class="row g-3">
      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <div class="card-body d-flex align-items-center">
            <i class="fa-duotone fa-user-circle fa-3x text-primary"></i>
            <div class="d-flex flex-column ms-3">
              <h5 class="card-title fs-6 mb-0">Jumlah User</h5>
              <p class="card-text fs-4 fw-semibold">{{ $total_users }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <div class="card-body d-flex align-items-center">
            <i class="fa-duotone fa-newspaper fa-3x text-dark"></i>
            <div class="d-flex flex-column ms-3">
              <h5 class="card-title fs-6 mb-0">Jumlah Berita</h5>
              <p class="card-text fs-4 fw-semibold">{{ $total_berita }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <div class="card-body d-flex align-items-center">
            <i class="fa-duotone fa-square-envelope fa-3x text-success"></i>
            <div class="d-flex flex-column ms-3">
              <h5 class="card-title fs-6 mb-0">Pengaduan</h5>
              <p class="card-text fs-4 fw-semibold">{{ $total_pengaduan }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <div class="card-body d-flex align-items-center">
            <i class="fa-duotone fa-square-xmark fa-3x text-info"></i>
            <div class="d-flex flex-column ms-3">
              <h5 class="card-title fs-6 mb-0">Perizinan</h5>
              <p class="card-text fs-4 fw-semibold">{{ $total_perizinan }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
