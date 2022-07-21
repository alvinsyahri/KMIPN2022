@extends('dashboard.layouts.main')

@section('content')

{{-- Button --}}
<a class="btn btn-primary" href="/dashboard/administrasi/solusi">
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
                            <td><label for="">Pertanyaan</label></td>
                            <td>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea1" style="height: 100px; width:500px"></textarea>
                                    <label for="floatingTextarea1">Pertanyaan</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="">Jawaban</label></td>
                            <td>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px; width:500px"></textarea>
                                    <label for="floatingTextarea2">Jawaban</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            {{-- Button --}}
            <div class="d-flex justify-content-left" style="margin-left: 105px">
                <button class="btn btn-primary px 4">Create</button>
            </div>
            {{-- End Button --}}
        </form>
        {{-- end form inputan --}}

      </div>
    </div>
  </div>
@endsection
