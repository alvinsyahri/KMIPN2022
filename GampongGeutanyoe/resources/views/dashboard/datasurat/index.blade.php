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
      <h6 class="card-subtitle mb-2 text-muted">Gampong Geutanyoe | Show 2</h6>
      <hr>
    {{-- end header content --}}

    {{-- button --}}
    <a class="btn btn-dark" href="/dashboard/administrasi/data-surat/edit">
        Data Masuk
      </a>
      {{-- end button --}}

        {{-- table 2 --}}
        <div class=" mt-5">
            <h6 class="ps-5 mb-3">Selesai</h6>
            <table class="table table-borderless mt-2">
                <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th scope="col">No Hp</th>
                      <th scope="col">jenis Surat</th>
                      <th scope="col">KK</th>
                      <th scope="col">KTP</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Safriudin</td>
                      <td>safriudin321@gmail.com</td>
                        <td>082383974449</td>
                        <td>SKTMP</td>
                        <td>
                            <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                <img class="transaction-img" src="/img/home/cover.png" alt="">
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                <img class="transaction-img" src="/img/home/cover-1.png" alt="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Safriudin</td>
                        <td>safriudin321@gmail.com</td>
                          <td>082383974449</td>
                          <td>SKTMP</td>
                          <td>
                              <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                  <img class="transaction-img" src="/img/home/cover.png" alt="">
                              </div>
                          </td>
                          <td>
                              <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                  <img class="transaction-img" src="/img/home/cover-1.png" alt="">
                              </div>
                          </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Safriudin</td>
                        <td>safriudin321@gmail.com</td>
                          <td>082383974449</td>
                          <td>SKTMP</td>
                          <td>
                              <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                  <img class="transaction-img" src="/img/home/cover.png" alt="">
                              </div>
                          </td>
                          <td>
                              <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                  <img class="transaction-img" src="/img/home/cover-1.png" alt="">
                              </div>
                          </td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Safriudin</td>
                        <td>safriudin321@gmail.com</td>
                          <td>082383974449</td>
                          <td>SKTMP</td>
                          <td>
                              <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                  <img class="transaction-img" src="/img/home/cover.png" alt="">
                              </div>
                          </td>
                          <td>
                              <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                  <img class="transaction-img" src="/img/home/cover-1.png" alt="">
                              </div>
                          </td>
                      </tr>
                  </tbody>
              </table>

              {{-- pagination 2--}}
                <nav aria-label="...">
                    <ul class="pagination pagination-sm justify-content-center">
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">1</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>
                {{-- end pagination 2--}}

        </div>
        {{-- end table 2 --}}

      </div>
      </div>
    </div>
  </div>
@endsection
