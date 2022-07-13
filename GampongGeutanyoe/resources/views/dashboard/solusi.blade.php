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
      <h5 class="card-title pb-1">Solusi</h5>
      <h6 class="card-subtitle mb-2 text-muted">Gampong Geutanyoe | Solusi</h6>
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
                            <td><label for="">Pertanyaan</label></td>
                            <td>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea1" style="height: 100px"></textarea>
                                    <label for="floatingTextarea1">Pertanyaan</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="">Jawaban</label></td>
                            <td>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Jawaban</label>
                                </div>
                            </td>
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
