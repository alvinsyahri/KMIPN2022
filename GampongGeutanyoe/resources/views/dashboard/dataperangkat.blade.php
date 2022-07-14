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
      <h6 class="card-subtitle mb-2 text-muted">Gampong Geutanyoe | Data</h6>
      <hr>
    {{-- end header content --}}

        {{-- table --}}
        <table class="table table-borderless mt-5">
            <thead>
                <tr>
                  <th scope="col">Photo</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Jabatan</th>
                  <th scope="col">Periode</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>
                        <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                            <img class="transaction-img" src="/img/home/cover-1.png" alt="">
                        </div>
                    </td>
                  <td>Zacky Shifa Juanda</td>
                  <td>Tuha 8</td>
                  <td>2020-2025</td>
                  <td>
                    <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                  </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                            <img class="transaction-img" src="/img/home/cover.png" alt="">
                        </div>
                    </td>
                  <td>Zacky Shifa Juanda</td>
                  <td>Tuha 8</td>
                  <td>2020-2025</td>
                  <td>
                    <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                  </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                            <img class="transaction-img" src="/img/home/cover-3.png" alt="">
                        </div>
                    </td>
                  <td>Zacky Shifa Juanda</td>
                  <td>Tuha 8</td>
                  <td>2020-2025</td>
                  <td>
                    <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                  </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                            <img class="transaction-img" src="/img/home/cover-2.png" alt="">
                        </div>
                    </td>
                  <td>Zacky Shifa Juanda</td>
                  <td>Tuha 8</td>
                  <td>2020-2025</td>
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
