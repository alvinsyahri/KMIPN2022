@extends('dashboard.layouts.main')

@section('content')

{{-- Button --}}
<a class="btn btn-primary" href="/dashboard/users">
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

            {{-- Button --}}
            <div class="d-flex justify-content-left" style="margin-left: 131px">
                <button class="btn btn-primary px 4">Create</button>
            </div>
            {{-- End Button --}}

        </form>
        {{-- end form inputan --}}

      </div>
    </div>
  </div>
@endsection
