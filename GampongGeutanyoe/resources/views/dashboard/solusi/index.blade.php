@extends('dashboard.layouts.main')

@section('content')

{{-- Button --}}
<a class="btn btn-primary" href="/dashboard/administrasi/solusi/create">
    <i class="fa-regular fa-plus me-2"></i>
    Tambah
</a>
{{-- End Button --}}

<div class="card mt-3" >

    <div class="card-body">
        {{-- table --}}
        <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
            <thead>
                <tr>
                  <th>Id</th>
                  <th>Tanggal</th>
                  <th>Pertanyaan</th>
                  <th>Jawaban</th>
                  <th>Action</th>
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
                    <a href="" class="btn btn-sm btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="" class="btn btn-sm btn-danger"><i class="fa-regular fa-trash-can fa-lg"></i></a>
                  </td>
                </tr>
              </tbody>
          </table>
        {{-- end table --}}
      </div>
    </div>
  </div>
@endsection
