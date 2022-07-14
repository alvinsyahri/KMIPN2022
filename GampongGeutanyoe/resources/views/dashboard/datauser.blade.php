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
      <h5 class="card-title pb-1">User</h5>
      <h6 class="card-subtitle mb-2 text-muted">Gampong Geutanyoe | Data User</h6>
      <hr>
    {{-- end header content --}}

        {{-- table --}}
        <table class="table table-borderless mt-5">
            <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">No. Hp</th>
                  <th scope="col">Username</th>
                  <th scope="col">Password</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Zacky Shifa</td>
                  <td>Jalan haji nafi matangkuli</td>
                  <td>0812345678123</td>
                  <td>Z4cky_</td>
                  <td>apaajalah08</td>
                  <td>
                    <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                  </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Zacky Shifa</td>
                    <td>Jalan haji nafi matangkuli</td>
                    <td>0812345678123</td>
                    <td>Z4cky_</td>
                    <td>apaajalah08</td>
                    <td>
                      <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                      <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Zacky Shifa</td>
                    <td>Jalan haji nafi matangkuli</td>
                    <td>0812345678123</td>
                    <td>Z4cky_</td>
                    <td>apaajalah08</td>
                    <td>
                      <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                      <a href=""><i class="fa-regular fa-xmark fa-lg"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Zacky Shifa</td>
                    <td>Jalan haji nafi matangkuli</td>
                    <td>0812345678123</td>
                    <td>Z4cky_</td>
                    <td>apaajalah08</td>
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
