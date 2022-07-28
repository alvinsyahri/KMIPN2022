@extends('layouts.main')

@section('content')

    <h1 class="text-center mt-5" style="color:#000957; font-weight: bold;">FORM PERIZINAN</h1>
    <div class="container-form mt-5">
        <form action="{{ route('perizinan.store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-4">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="text" required>
            </div>
            <div class="mb-4">
                <label for="telp" class="form-label">No. Hp</label>
                <input type="telp" name="telp" class="form-control" id="telp" required>
            </div>
            <div class="mb-4">
                <label for="namalorong" class="form-label">Nama Lorong</label>
                <input type="text" name="namalorong" class="form-control" id="text" required>
            </div>
            <div class="mb-4">
                <label for="ktp" class="form-label">Upload Kartu Tanda Penduduk (KTP)</label>
                <input class="form-control" name="ktp" type="file" id="ktp">
            </div>
            <div class="mb-4">
                <label for="izin">Permohonan Izin</label>
                <textarea class="form-control" name="izin" id="izin" required></textarea>
            </div>
            <center>
                <button type="submit" class="btn btn-primary mt-4">KIRIM</button>
            </center>
        </form>
    </div>
    <br>
    
@endsection