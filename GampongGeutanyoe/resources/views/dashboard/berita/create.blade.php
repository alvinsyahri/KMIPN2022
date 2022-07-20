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
      <h5 class="card-title pb-1">Berita</h5>
      <h6 class="card-subtitle mb-2 text-muted">Gampong Geutanyoe | Create</h6>
      <hr>
    {{-- end header content --}

    {{-- button --}}
    <a class="btn btn-dark" href="/dashboard/berita">
        Back
      </a>
      {{-- end button --}}

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
                                <trix-editor input="x"></trix-editor></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
        {{-- end form inputan --}}

@endsection
