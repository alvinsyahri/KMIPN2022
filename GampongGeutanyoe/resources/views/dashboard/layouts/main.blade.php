<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    {{-- bootstrao css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- custom css --}}
    <link rel="stylesheet" href="/css/sidebars.css">
    <link rel="stylesheet" href="/css/headers.css">
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <link rel="stylesheet" href="/css/style.css">

    {{-- icon css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">

    {{-- js --}}
    <script type="text/javascript" src="/js/trix.js"></script>

    <style>
        body{
            /* background-color: #cdcac6; */
        }
      </style>

</head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-md-2" style="height: auto">

                {{-- sidebar halaman --}}
                @include('dashboard.partials.sidebar')

            </div>
            <div class="col">

                {{-- header halaman --}}
                @include('dashboard.partials.header')

                {{-- content halaman --}}
                @yield('container')

                {{-- footer halaman --}}
                @include('dashboard.partials.footer')

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>


