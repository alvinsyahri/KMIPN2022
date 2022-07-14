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
      <h5 class="card-title pb-1">Keuangan</h5>
      <h6 class="card-subtitle mb-2 text-muted">Gampong Geutanyoe | Laporan</h6>
      <hr>
    {{-- end header content --}}

      {{-- button --}}
      <button type="button" class="btn btn-primary btn-lg m-2 mt-4"><i class="bi bi-plus"></i>Tambah</button>
      {{-- end button --}}

      {{-- form inputan --}}
        <form action="" class="mt-3">
            <div>
                <div class="input-group mb-3">
                    <table>
                        <tr>
                            <td><label for="">Tanggal</label></td>
                            <td><input type="Date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                        </tr>
                        <tr>
                            <td><label for="">Keterangan</label></td>
                            <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                        </tr>
                        <tr>
                            <td><label for="">Debet</label></td>
                            <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                        </tr>
                        <tr>
                            <td><label for="">Kredit</label></td>
                            <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                        </tr>
                        <tr>
                            <td><label for="">Saldo</label></td>
                            <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                        </tr>
                        <tr>
                            <td><label for="">Bukti</label></td>
                            <td><input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
        {{-- end form inputan --}}

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
