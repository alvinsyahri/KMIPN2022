@extends('dashboard.layouts.main')

@section('content')

{{-- Button --}}
<a class="btn btn-primary" href="/dashboard/administrasi/data-surat">
    Selesai
</a>
{{-- End Button --}}

<div class="card mt-3">
    <div class="card-body">
        {{-- table 1 --}}
            <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
                <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th scope="col">No Hp</th>
                      <th scope="col">jenis Surat</th>
                      <th scope="col">KK</th>
                      <th scope="col">KTP</th>
                      <th scope="col">Action</th>
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
                            <img class="transaction-img" src="/img/home/cover.png" alt="" width="75px">
                        </td>
                        <td>
                            <img class="transaction-img" src="/img/home/cover-1.png" alt="" width="75px">
                        </td>
                      <td>
                        <a href="#" class="btn btn-sm btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="#" class="btn btn-sm btn-danger"><i class="fa-regular fa-xmark fa-lg"></i></a>
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
