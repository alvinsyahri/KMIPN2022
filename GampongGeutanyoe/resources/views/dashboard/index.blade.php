@extends('dashboard.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row gap-2">
                <div class="col">
                  <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <i class="fa-duotone fa-user fa-3x text-primary"></i>
                      <div class="d-flex flex-column ms-3">
                        <h5 class="card-title fs-6 mb-0">Jumlah User</h5>
                        <p class="card-text fs-4 fw-semibold">10</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body d-flex align-items-center">
                      <i class="fa-duotone fa-square-envelope fa-3x text-success"></i>
                      <div class="d-flex flex-column ms-3">
                        <h5 class="card-title fs-6 mb-0">Pengaduan</h5>
                        <p class="card-text fs-4 fw-semibold">15</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="card">
                      <div class="card-body d-flex align-items-center">
                        <i class="fa-duotone fa-square-xmark fa-3x text-info"></i>
                        <div class="d-flex flex-column ms-3">
                          <h5 class="card-title fs-6 mb-0">Perizinan</h5>
                          <p class="card-text fs-4 fw-semibold">30</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="row m-1 mt-4">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <div class="ms-3">
                          <h5 class="card-title fs-6 mb-0">Perizinan</h5>
                        </div>
                      </div>
                </div>
              </div>
        </div>
    </div>

@endsection
