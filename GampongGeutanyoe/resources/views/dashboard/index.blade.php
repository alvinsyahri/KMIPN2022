@extends('dashboard.layouts.main')

@section('content')
  <div class="row">
    <div class="col">
        <div style="padding: 35px; background-color:red; border-radius:25px; margin-bottom:25px;color:white">
            <label>User</label><label style="float: right;">15</label>
        </div>
        <div style="padding: 35px; background-color:green; border-radius:25px; margin-bottom:25px;color:white">
            <label>User</label><label style="float: right;">15</label>
        </div>
        <div style="padding: 35px; background-color:blue; border-radius:25px;color:white">
            <label>User</label><label style="float: right;">15</label>
        </div>
    </div>
    <div class="col">
        <div class="card text-bg-dark mb-3" style="border-radius:25px">
            <div class="card-header d-flex justify-content-center">Statitstik Pengunjung</div>
            <div class="card-body d-flex justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16" >
                    <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
                  </svg>
            </div>
        </div>
    </div>
  </div>

@endsection
