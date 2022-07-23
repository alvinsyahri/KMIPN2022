@extends('dashboard.layouts.main')

@section('content')
  <div class="row">
    <div class="col">
      <a class="btn btn-primary" href="/dashboard/berita/create">
        <i class="fa-regular fa-plus me-2"></i>
        Tambah
      </a>
      <a class="btn btn-dark ms-2" href="/dashboard/berita/kategori"> 
        <i class="fa-regular fa-grid-2 me-2"></i>
        Kelola Kategori
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card mt-3">
        <div class="card-body">
          {{-- Table --}}
          <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
            <thead>
              <tr>
                <th>#</th>
                <th>Thumbnail</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>
                  <img class="transaction-img" src="/img/home/cover.png" alt="" width="75px">
                </td>
                <td>Pembentukan Panitia</td>
                <td>Sosial</td>
                <td>
                  <a href="#" class="btn btn-sm btn-info"><i class="fa-regular fa-eye"></i></a>
                  <a href="#" class="btn btn-sm btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                  <a href="#" class="btn btn-sm btn-danger"><i class="fa-regular fa-trash-can fa-lg"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
          {{-- End Table --}}
        </div>
      </div>
    </div>
  </div>
@endsection
