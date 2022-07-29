@extends('dashboard.layouts.main')

@section('content')
  {{-- Button --}}
  <a class="btn btn-primary" href="/dashboard/laporan-keuangan">
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
                <td><label for="">Tanggal</label></td>
                <td><input type="Date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
              </tr>
              <tr>
                <td><label for="">Keterangan</label></td>
                <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
              </tr>
              <tr>
                <td><label for="">Debet</label></td>
                <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
              </tr>
              <tr>
                <td><label for="">Kredit</label></td>
                <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
              </tr>
              <tr>
                <td><label for="">Saldo</label></td>
                <td><input type="Text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
              </tr>
              <tr>
                <td><label for="">Bukti</label></td>
                <td><input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
              </tr>
            </table>
          </div>
        </div>
        {{-- Button --}}
        <div class="d-flex justify-content-left" style="margin-left: 107px">
          <button class="btn btn-primary px 4">Create</button>
        </div>
        {{-- End Button --}}
      </form>
      {{-- end form inputan --}}

    </div>
  </div>
  </div>
@endsection
