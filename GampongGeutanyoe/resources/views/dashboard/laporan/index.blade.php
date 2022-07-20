@extends('dashboard.layouts.main')

@section('content')

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
      <h5 class="card-title pb-1">Keuangan</h5>
      <h6 class="card-subtitle mb-2 text-muted">Gampong Geutanyoe | Show</h6>
      <hr>
    {{-- end header content --}}

      {{-- button --}}
      <a class="btn btn-dark" href="/dashboard/laporan/tambah">
        <i class="fa-regular fa-plus me-2"></i>
        Tambah
      </a>
      {{-- end button --}}

        {{-- table --}}
        <table class="table table-borderless mt-5">
            <thead>
                <tr>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Debet</th>
                  <th scope="col">Kredit</th>
                  <th scope="col">Saldo</th>
                  <th scope="col">Bukti</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>20-09-2022</td>
                  <td>Dana APBN</td>
                  <td>Rp. 10.000.000</td>
                  <td>Rp. 0</td>
                  <td>Rp. 10.000.000</td>
                  <td><a href=""><i class="fa-solid fa-file-arrow-up"></i></a></td>
                  <td>
                    <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                  </td>
                </tr>
                <tr>
                    <td>10-12-2022</td>
                    <td>Dana APBN</td>
                    <td>Rp. 10.000.000</td>
                    <td>Rp. 0</td>
                    <td>Rp. 10.000.000</td>
                    <td><a href=""><i class="fa-solid fa-file-arrow-up"></i></a></td>
                  <td>
                    <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                  </td>
                  </tr>
                  <tr>
                    <td>29-01-2022</td>
                    <td>Dana APBN</td>
                    <td>Rp. 10.000.000</td>
                    <td>Rp. 0</td>
                    <td>Rp. 10.000.000</td>
                    <td><a href=""><i class="fa-solid fa-file-arrow-up"></i></a></td>
                  <td>
                    <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                  </td>
                  </tr>
                  <tr>
                    <td>13-04-2022</td>
                    <td>Dana APBN</td>
                    <td>Rp. 10.000.000</td>
                    <td>Rp. 0</td>
                    <td>Rp. 10.000.000</td>
                    <td><a href=""><i class="fa-solid fa-file-arrow-up"></i></a></td>
                  <td>
                    <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                  </td>
                  </tr>
                  <tr>
                    <td>10-01-2022</td>
                    <td>Dana APBN</td>
                    <td>Rp. 10.000.000</td>
                    <td>Rp. 0</td>
                    <td>Rp. 10.000.000</td>
                    <td><a href=""><i class="fa-solid fa-file-arrow-up"></i></a></td>
                  <td>
                    <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                  </td>
                  </tr>
              </tbody>
          </table>
        {{-- end table --}}

        {{-- pagination --}}
        <nav aria-label="...">
            <ul class="pagination pagination-sm justify-content-center">
              <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
          </nav>
        {{-- end pagination --}}
      </div>
    </div>
  </div>
@endsection
