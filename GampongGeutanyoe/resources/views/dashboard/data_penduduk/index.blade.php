@extends('dashboard.layouts.main')

@section('content')
  <div class="row">
    <div class="col">
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
    </div>
  </div>

  <div class="row">
    <div class="col">
      <a class="btn btn-primary" href="{{ route('data-penduduk.create') }}">
        <i class="fa-regular fa-plus me-2"></i>
        Tambah
      </a>

      <div class="card mt-3">
        <div class="card-body">
          {{-- Table --}}
          <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
            <thead>
              <tr>
                <th>#</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Gol.Darah</th>
                <th>Alamat</th>
                <th>RT</th>
                <th>RW</th>
                <th>Kel/Desa</th>
                <th>Kecamatan</th>
                <th>Agama</th>
                <th>Status Perkawinan</th>
                <th>Pekerjaan</th>
                <th>Kewarganegaraan</th>
                <th>Foto</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($penduduks as $penduduk)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $penduduk->nik }}</td>
                <td>{{ $penduduk->nama }}</td>
                <td>{{ $penduduk->tempat }}</td>
                <td>{{ $penduduk->tanggal }}</td>
                <td>{{ $penduduk->kelamin }}</td>
                <td>{{ $penduduk->darah }}</td>
                <td>{{ $penduduk->alamat }}</td>
                <td>{{ $penduduk->rt }}</td>
                <td>{{ $penduduk->rw }}</td>
                <td>{{ $penduduk->desa }}</td>
                <td>{{ $penduduk->kecamatan }}</td>
                <td>{{ $penduduk->agama }}</td>
                <td>{{ $penduduk->perkawinan }}</td>
                <td>{{ $penduduk->pekerjaan }}</td>
                <td>{{ $penduduk->kewarganegaraan }}</td>
                <td>{{ $penduduk->foto }}</td>
                <td>
                  <a href="{{ route('data-penduduk.edit', $penduduk->id) }}" class="btn btn-sm btn-warning">
                    <i class="fa-regular fa-pen-to-square"></i>
                  </a>
                </td>
              </tr>

              @endforeach
            </tbody>
          </table>
          {{-- End Table --}}
        </div>
      </div>
    </div>
  </div>
  </div>

  {{-- <script src="{{ asset('js/show-hide-password.js') }}"></script> --}}
@endsection
