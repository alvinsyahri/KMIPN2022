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
      <h5 class="card-title pb-1">Berita</h5>
      <h6 class="card-subtitle mb-2 text-muted">Gampong Geutanyoe | Upload</h6>
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
                            <td><label for="">Judul</label></td>
                            <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                        </tr>
                        <tr>
                            <td><label for="">Thumbnail</label></td>
                            <td><input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                        </tr>
                        <tr>
                            <td><label for="">Text</label></td>
                            <td><input id="x" type="hidden" name="content">
                                <trix-editor input="x"></trix-editor></td>
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
                  <th scope="col">No</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Thumbnail</th>
                  <th scope="col">Text</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Pembentukan Panitia</td>
                  <td>20-09-2022</td>
                  <td>
                    <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                        <img class="transaction-img" src="/img/home/cover.png" alt="">
                    </div>
                  </td>
                  <td>lorem ipsun arll the paramter in the live witohut</td>
                  <td>
                    <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                  </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Pembentukan Panitia</td>
                    <td>20-09-2022</td>
                    <td>
                      <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                          <img class="transaction-img" src="/img/home/cover.png" alt="">
                      </div>
                    </td>
                    <td>lorem ipsun arll the paramter in the live witohut</td>
                    <td>
                      <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                      <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Pembentukan Panitia</td>
                    <td>20-09-2022</td>
                    <td>
                      <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                          <img class="transaction-img" src="/img/home/cover.png" alt="">
                      </div>
                    </td>
                    <td>lorem ipsun arll the paramter in the live witohut</td>
                    <td>
                      <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                      <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Pembentukan Panitia</td>
                    <td>20-09-2022</td>
                    <td>
                      <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                          <img class="transaction-img" src="/img/home/cover.png" alt="">
                      </div>
                    </td>
                    <td>lorem ipsun arll the paramter in the live witohut</td>
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
