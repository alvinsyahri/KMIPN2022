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
      <h6 class="card-subtitle mb-2 text-muted">Gampong Geutanyoe | Perizinan</h6>
      <hr>
    {{-- end header content --}}

        {{-- table 1 --}}
        <div class=" mt-5">
            <h6 class="ps-5 mb-3">Data Perizinan</h6>
            <table class="table table-borderless mt-2">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th scope="col">No Hp</th>
                      <th scope="col">Lorong</th>
                      <th scope="col">KTP</th>
                      <th scope="col">Masukkan</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Safriudin</td>
                      <td>safriudin321@gmail.com</td>
                        <td>082383974449</td>
                        <td>Haji Nafi</td>
                        <td>
                            <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                <img class="transaction-img" src="/img/home/cover-1.png" alt="">
                            </div>
                        </td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium reprehenderit maiores cupiditate,
                            illum pariatur harum error cum,
                            quaerat amet facere eos vero minus maxime ducimus delectus, accusantium fugit nobis a!</td>
                      <td>
                        <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                        <a href=""><i class="fa-solid fa-check"></i></a>
                      </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Safriudin</td>
                        <td>safriudin321@gmail.com</td>
                          <td>082383974449</td>
                          <td>Haji Nafi</td>
                          <td>
                              <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                  <img class="transaction-img" src="/img/home/cover-1.png" alt="">
                              </div>
                          </td>
                          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium reprehenderit maiores cupiditate,
                              illum pariatur harum error cum,
                              quaerat amet facere eos vero minus maxime ducimus delectus, accusantium fugit nobis a!</td>
                        <td>
                          <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                          <a href=""><i class="fa-solid fa-check"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Safriudin</td>
                        <td>safriudin321@gmail.com</td>
                          <td>082383974449</td>
                          <td>Haji Nafi</td>
                          <td>
                              <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                  <img class="transaction-img" src="/img/home/cover-1.png" alt="">
                              </div>
                          </td>
                          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium reprehenderit maiores cupiditate,
                              illum pariatur harum error cum,
                              quaerat amet facere eos vero minus maxime ducimus delectus, accusantium fugit nobis a!</td>
                        <td>
                          <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                          <a href=""><i class="fa-solid fa-check"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Safriudin</td>
                        <td>safriudin321@gmail.com</td>
                          <td>082383974449</td>
                          <td>Haji Nafi</td>
                          <td>
                              <div class="d-flex flex-column flex-md-row justify-content-start align-items-start align-items-md-center">
                                  <img class="transaction-img" src="/img/home/cover-1.png" alt="">
                              </div>
                          </td>
                          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium reprehenderit maiores cupiditate,
                              illum pariatur harum error cum,
                              quaerat amet facere eos vero minus maxime ducimus delectus, accusantium fugit nobis a!</td>
                        <td>
                          <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                          <a href=""><i class="fa-solid fa-check"></i></a>
                        </td>
                      </tr>
                  </tbody>
              </table>

              {{-- pagination 1--}}
                <nav aria-label="...">
                    <ul class="pagination pagination-sm justify-content-center">
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">1</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>
              {{-- end pagination 1--}}

        </div>
        {{-- end table 1--}}

      </div>
      </div>
    </div>
  </div>
@endsection