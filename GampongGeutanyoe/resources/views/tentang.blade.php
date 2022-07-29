@extends('layouts.main')

@section('content')
  <section id="header">
    <div class="container-fluid px-0">
      <div class="row">
        <div class="col">
          <div class="card bg-dark text-white border-0 rounded-0 p-0">
            <img id="bg-header-tentang" src="{{ asset('images/sawah.jpg') }}" class="card-img" alt="" width="100%" height="500">
            <div class="card-img-overlay d-flex align-items-center p-0">
              <h1 class="display-4 fw-semibold text-center text-white flex-fill p-4 text-uppercase">Ulee Blang Mane</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="info-geo">
    <div class="container mt-5">
      <div class="row">
        <div class="col">
          <div class="gap-3 gap-md-0">
            <h2 class="text-center mt-5" style="color:#000957; font-weight: bold;">INFORMASI GEOGRAFIS</h2>
            <figure class="text-center">
              <img src="{{ asset('images/peta.jpeg') }}" class="img-fluid rounded-3 mt-3" width="1000">
              <figcaption><a href="https://www.google.co.id/maps/place/Keude+Punteut,+Kec.+Blang+Mangat,+Kota+Lhokseumawe,
                      +Aceh/@5.114676,97.1640508,16.08z/data=!4m5!3m4!1s0x304783efd1e53a21:0xe32052def041dac8!8m2!3d5.
                      1158335!4d97.1679147" class="map"> https://www.google.co.id/maps </a></figcaption>
            </figure>
            <p class="card-text mt-3">
              Batas-batas wilayah Gampong Ulee Blang Mane sebagai berikut:
            <ul>
              <li>Sebelah Timur berbatasan dengan Gampong Bayu </li>
              <li>Sebelah Barat berbatasan dengan Gampong Bukitrata </li>
            </ul>
            Luas Desa Ulee Blang Mane adalah 2 km2 dengan jumlah penduduk desa berjumlah 1185
            jiwa yang terbagi menjadi 579 laki-laki dan 606 perempuan.
            <br>Jarak dari desa ke ibukota kecamatan sekitar 9,7 km apabila melalui jalur transportasi darat.
            </p>
            <br>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="laporan">
    <div class="container mt-5">
      <div class="row">
        <h2 class="text-center mb-5" style="color:#000957; font-weight: bold;">LAPORAN KEUANGAN DESA</h2>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <table id="myTable" class="table responsive nowrap table-bordered table-striped align-middle" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>12 Juli 2002</td>
                    <td>Dana</td>
                    <td>150000</td>
                    <td>0</td>
                    <td>150000</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </sectionc>

    <section id="masukan">
      <div class="container my-5">
        <div class="row">
          <h2 class="text-center mb-5" style="color:#000957; font-weight: bold;">SOLUSI KAMI</h2>
          <div class="col">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Accordion Item #1
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Accordion Item #2
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Accordion Item #3
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endsection
