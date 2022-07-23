@extends('dashboard.layouts.main')

@section('content')
  {{-- Button --}}
  <a class="btn btn-primary" href="/dashboard/users/create">
    <i class="fa-regular fa-plus me-2"></i>
    Tambah
  </a>
  {{-- End Button --}}

  <div class="card mt-3">
    <div class="card-body">
      {{-- Table --}}
      <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Alamat</th>
            <th>No. Hp</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->nama }}</td>
              <td>{{ '@' . $user->username }}</td>
              <td>{{ $user->alamat }}</td>
              <td>{{ $user->no_hp }}</td>
              <td>
                <a href="#" class="btn btn-sm btn-dark"><i class="fa-regular fa-unlock-keyhole"></i></a>
                <a href="#" class="btn btn-sm btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                @if (!$user->is_admin)
                  <a href="#" class="btn btn-sm btn-danger"><i class="fa-regular fa-trash-can fa-lg"></i></a>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {{-- End Table --}}
    </div>
  </div>
  </div>
@endsection
