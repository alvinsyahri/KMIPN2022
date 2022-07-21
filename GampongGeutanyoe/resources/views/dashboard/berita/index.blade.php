@extends('dashboard.layouts.main')

@section('content')
  {{-- Button --}}
  <a class="btn btn-primary" href="/dashboard/berita/create">
    <i class="fa-regular fa-plus me-2"></i>
    Tambah
  </a>
  {{-- End Button --}}
  <div class="card mt-3">
    <div class="card-body">
      {{-- Table --}}
      <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Thumbnail</th>
            <th>Text</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Pembentukan Panitia</td>
            <td>20-09-2022</td>
            <td>
              <img class="transaction-img" src="/img/home/cover.png" alt="" width="75px">
            </td>
            <td>lorem ipsun arll the paramter in the live witohut</td>
            <td>
              <a href="#"><i class="btn btn-sm btn-warning fa-regular fa-pen-to-square"></i></a>
              <a href="#"><i class="btn btn-sm btn-danger fa-regular fa-xmark fa-lg"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
      {{-- End Table --}}
    </div>
  </div>
  </div>
@endsection
