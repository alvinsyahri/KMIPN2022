@extends('dashboard.layouts.main')

@section('content')

<div class="card mt-3">
    <div class="card-body">
        {{-- table 1 --}}
            <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No Hp</th>
                      <th>Lorong</th>
                      <th>KTP</th>
                      <th>Masukkan</th>
                      <th>Action</th>
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
                            <img class="transaction-img" src="/img/home/cover-1.png" alt="" width="75px">
                        </td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium reprehenderit maiores cupiditate,
                            illum pariatur harum error cum,
                            quaerat amet facere eos vero minus maxime ducimus delectus, accusantium fugit nobis a!</td>
                      <td>
                        <a href="" class="btn btn-sm btn-warning"><i class="fa-regular fa-xmark fa-lg"></i></a>
                        <a href="" class="btn btn-sm btn-danger"><i class="fa-solid fa-check"></i></a>
                      </td>
                    </tr>
                  </tbody>
              </table>
        {{-- end table 1--}}

      </div>
      </div>
    </div>
  </div>
@endsection
