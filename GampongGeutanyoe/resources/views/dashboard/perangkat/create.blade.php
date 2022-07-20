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
      <h5 class="card-title pb-1">Perangkat Gampong</h5>
      <h6 class="card-subtitle mb-2 text-muted">Gampong Geutanyoe | Data Perangkat Gampong</h6>
      <hr>
    {{-- end header content --}}

      {{-- button --}}
      <a class="btn btn-dark" href="/dashboard/perangkat-gampong">
        Back
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
                        <td><label for="">Tempat Lahir</label></td>
                        <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                    </tr>
                    <tr>
                        <td><label for="">Tanggal Lahir</label></td>
                        <td><input type="Date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                    </tr>
                    <tr>
                        <td><label for="">Alamat</label></td>
                        <td>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Jawaban</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Pekerjaan</label></td>
                        <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                    </tr>
                    <tr>
                        <td><label for="">Agama</label></td>
                        <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                    </tr>
                    <tr>
                        <td><label for="">Pendidikan terakhir</label></td>
                        <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                    </tr>
                    <tr>
                        <td><label for="">Jabatan</label></td>
                        <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                    </tr>
                    <tr>
                        <td><label for="">Periode</label></td>
                        <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
                    </tr>
                    <tr>
                        <td><label for="">Pas Photo</label></td>
                        <td><input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
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
