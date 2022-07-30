@extends('dashboard.layouts.main')

@section('content')
  <div class="row">
    <div class="col col-md-6">
      <a class="btn btn-outline-secondary" href="{{ route('data-penduduk.index') }}">
        <i class="fa-regular fa-chevron-left me-2"></i>
        Kembali
      </a>

      <div class="card mt-3">
        <div class="card-body">
          {{-- Form Berita --}}
          <form action="{{ route('data-penduduk.store') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="nik" class="form-label">NIK</label>
              <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" id="nik" value="{{ old('nik') }}" autofocus required>
              @error('nik')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama') }}" required>
              @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="tempat" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" id="tempat" value="{{ old('tempat') }}" required>
              @error('tempat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="tanggal" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" value="{{ old('tanggal') }}" required>
              @error('tanggal')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
                <label for="kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="kelamin" id="kelamin">
                  <option value="">Pilihan</option>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="darah" class="form-label">Gol.Darah</label>
                <select class="form-select" name="darah" id="darah">
                  <option value="">Pilihan</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                </select>
            </div>

            <div class="mb-3">
              <label for="rt" class="form-label">RT</label>
              <input type="text" class="form-control @error('rt') is-invalid @enderror" name="rt" id="rt" value="{{ old('rt') }}" required>
              @error('rt')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="rw" class="form-label">RW</label>
              <input type="text" class="form-control @error('rw') is-invalid @enderror" name="rw" id="rw" value="{{ old('rw') }}" required>
              @error('rw')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" value="{{ old('alamat') }}" required>
              @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="desa" class="form-label">kel/Des</label>
              <input type="text" class="form-control @error('desa') is-invalid @enderror" name="desa" id="desa" value="{{ old('desa') }}" required>
              @error('desa')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="kecamatan" class="form-label">Kecamatan</label>
              <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" id="kecamatan" value="{{ old('kecamatan') }}" required>
              @error('kecamatan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <select class="form-select" name="agama" id="agama">
                  <option value="">Pilihan</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Protestan">Protestan</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
            </div>

            <div class="mb-3">
              <label for="perkawinan" class="form-label">Perkawinan</label>
              <input type="text" class="form-control @error('perkawinan') is-invalid @enderror" name="perkawinan" id="perkawinan" value="{{ old('perkawinan') }}" required>
              @error('perkawinan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="pekerjaan" class="form-label">Pekerjaan</label>
              <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" id="pekerjaan" value="{{ old('pekerjaan') }}" required>
              @error('pekerjaan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
                <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                <select class="form-select" name="kewarganegaraan" id="kewarganegaraan">
                  <option value="">Pilihan</option>
                  <option value="WNI">WNI</option>
                  <option value="WNA">WNA</option>

                </select>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('foto') is-invalid @enderror" type="file" name="foto" id="foto" onchange="previewImage()">
                @error('foto')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

            <div class="text-end">
              <button type="submit" class="btn btn-primary">Tambah Data Penduduk</button>
            </div>
          </form>
          {{-- End Form Berita --}}
        </div>
      </div>
    </div>
  </div>

  <script>
    function previewImage() {
      const image = document.querySelector('#foto');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(OFREvent) {
        imgPreview.src = OFREvent.target.result;
      }
    }
  </script>

@endsection
