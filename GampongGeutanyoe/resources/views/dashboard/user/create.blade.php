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
      <h5 class="card-title pb-1">User</h5>
      <h6 class="card-subtitle mb-2 text-muted">Gampong Geutanyoe | Create User</h6>
      <hr>
    {{-- end header content --}}

      {{-- button --}}
      <a class="btn btn-dark" href="/dashboard/user">
        Tambah
      </a>
      {{-- end button --}}

      {{-- form inputan --}}
        <form action="" class="mt-3">
            <div>
                <div class="input-group mb-3">
                    <table>
                        <tr>
                            <td><label for="">Nama Lengkap</label></td>
                            <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                        </tr>
                        <tr>
                            <td><label for="">NIK</label></td>
                            <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                        </tr>
                        <tr>
                            <td><label for="">No. HP</label></td>
                            <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                        </tr>
                        <tr>
                            <td><label for="">Alamat</label></td>
                            <td>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="">Username</label></td>
                            <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                        </tr>
                        <tr>
                            <td><label for="">Password</label></td>
                            <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
        {{-- end form inputan --}}

      </div>
    </div>
  </div>
@endsection
