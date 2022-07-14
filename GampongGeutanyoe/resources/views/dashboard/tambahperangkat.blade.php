@extends('dashboard.layouts.main')

@section('container')

<style>
    td{
        padding: 10px;
    }
    table{
        width: 50%;
    }
</style>

<div class="card" style="width: auto; height:auto">
    {{-- header content --}}
    <div class="card-body">
      <h5 class="card-title pb-1">Perangkat Gampong</h5>
      <h6 class="card-subtitle mb-2 text-muted">Gampong Geutanyoe | Data Perangkat Gampong</h6>
      <hr>
    {{-- end header content --}}

      {{-- button --}}
      <button type="button" class="btn btn-primary btn-lg m-2 mt-4"><i class="bi bi-plus"></i>Tambah</button>
      {{-- end button --}}

      </div>
    </div>
  </div>
@endsection
