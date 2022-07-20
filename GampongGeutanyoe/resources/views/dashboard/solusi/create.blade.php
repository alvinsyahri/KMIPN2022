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
      <h5 class="card-title pb-1">Administrasi</h5>
      <h6 class="card-subtitle mb-2 text-muted">Gampong Geutanyoe | Create</h6>
      <hr>
    {{-- end header content --}}

    {{-- button --}}
    <a class="btn btn-dark" href="/dashboard/administrasi/solusi">
        Back
      </a>
      {{-- end button --}}

      {{-- form inputan --}}
        <form action="" class="mt-3">
            <div>
                <div class="input-group mb-3">
                    <table>
                        <tr>
                            <td><label for="">Pertanyaan</label></td>
                            <td>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea1" style="height: 100px"></textarea>
                                    <label for="floatingTextarea1">Pertanyaan</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="">Jawaban</label></td>
                            <td>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Jawaban</label>
                                </div>
                            </td>
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
