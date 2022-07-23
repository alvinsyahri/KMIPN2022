@extends('dashboard.layouts.main')

@section('content')
  {{-- Button --}}
  <a class="btn btn-primary" href="/dashboard/laporan-keuangan/create">
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
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Debet</th>
            <th>Kredit</th>
            <th>Saldo</th>
            <th>Bukti</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>20-09-2022</td>
            <td>Dana APBN</td>
            <td>Rp. 10.000.000</td>
            <td>Rp. 0</td>
            <td>Rp. 10.000.000</td>
            <td>
              <a href="" class="btn btn-sm btn-info ">
                <i class="fa-regular fa-file-arrow-up me-1"></i>
                Upload
              </a>
            </td>
            <td>
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
@endsection
