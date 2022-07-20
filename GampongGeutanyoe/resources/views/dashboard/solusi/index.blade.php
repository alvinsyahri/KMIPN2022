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
      <h5 class="card-title pb-1">Administrasi</h5>
      <h6 class="card-subtitle mb-2 text-muted">Gampong Geutanyoe | Show</h6>
      <hr>
    {{-- end header content --}}

      {{-- button --}}
      <a class="btn btn-dark" href="/dashboard/administrasi/solusi/tambah">
        <i class="fa-regular fa-plus me-2"></i>
        Tambah
      </a>
      {{-- end button --}}

        {{-- table --}}
        <table class="table table-borderless mt-5">
            <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Pertanyaan</th>
                  <th scope="col">Jawaban</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>20-09-2022</td>
                  <td>Coba ceritakan tentang diri kamu?</td>
                  <td>Perkenalkan, nama saya Ningning. Lulusan S1 Ilmu Komunikasi Universitas TOP.
                    Saya memiliki minat yang tinggi pada bidang pemasaran. Selama kuliah,
                    saya berhasil memenangkan beberapa kompetisi pemasaran.</td>
                  <td>
                    <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                  </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>20-09-2022</td>
                    <td>Coba ceritakan tentang diri kamu?</td>
                    <td>Perkenalkan, nama saya Ningning. Lulusan S1 Ilmu Komunikasi Universitas TOP.
                      Saya memiliki minat yang tinggi pada bidang pemasaran. Selama kuliah,
                      saya berhasil memenangkan beberapa kompetisi pemasaran.</td>
                    <td>
                      <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                      <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>20-09-2022</td>
                    <td>Coba ceritakan tentang diri kamu?</td>
                    <td>Perkenalkan, nama saya Ningning. Lulusan S1 Ilmu Komunikasi Universitas TOP.
                      Saya memiliki minat yang tinggi pada bidang pemasaran. Selama kuliah,
                      saya berhasil memenangkan beberapa kompetisi pemasaran.</td>
                    <td>
                      <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                      <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>20-09-2022</td>
                    <td>Coba ceritakan tentang diri kamu?</td>
                    <td>Perkenalkan, nama saya Ningning. Lulusan S1 Ilmu Komunikasi Universitas TOP.
                      Saya memiliki minat yang tinggi pada bidang pemasaran. Selama kuliah,
                      saya berhasil memenangkan beberapa kompetisi pemasaran.</td>
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
