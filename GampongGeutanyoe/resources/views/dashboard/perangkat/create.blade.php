@extends('dashboard.layouts.main')

@section('content')

{{-- Button --}}
<a class="btn btn-primary" href="/dashboard/perangkat-gampong">
    Back
</a>
{{-- End Button --}}

<div class="card mt-3">
    <div class="card-body">
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
        {{-- Button --}}
        <div class="d-flex justify-content-left" style="margin-left: 160px">
            <button class="btn btn-primary px 4">Create</button>
        </div>
        {{-- End Button --}}
    </form>
    {{-- end form inputan --}}

      </div>
    </div>
  </div>
@endsection
