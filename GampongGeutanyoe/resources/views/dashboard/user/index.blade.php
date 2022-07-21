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
            <th>Id</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Alamat</th>
            <th>No. Hp</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Zacky Shifa</td>
            <td>Z4cky_</td>
            <td>Jalan haji nafi matangkuli</td>
            <td>0812345678123</td>
            <td>
              <a href="#"><i class="btn btn-sm btn-dark fa-regular fa-unlock-keyhole"></i></a>
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
