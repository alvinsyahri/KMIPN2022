@extends('dashboard.layouts.main')

@section('content')
  {{-- Button --}}
  <a class="btn btn-primary" href="/dashboard/berita">
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
                <td><label for="">Judul</label></td>
                <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
              </tr>
              <tr>
                <td><label for="">Thumbnail</label></td>
                <td><input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></td>
              </tr>
              <tr>
                <td><label for="">Text</label></td>
                <td><input id="x" type="hidden" name="content">
                  <trix-editor input="x"></trix-editor>
                </td>
              </tr>
            </table>
          </div>
        </div>

        {{-- Button --}}
        <div class="d-flex justify-content-left" style="margin-left: 100px">
          <button class="btn btn-primary px 4">Create</button>
        </div>
        {{-- End Button --}}

      </form>
      {{-- end form inputan --}}

      {{-- Trix JS --}}
      <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>
    @endsection
