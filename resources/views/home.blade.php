@extends('app')
@section('content')
    @auth
        <h3 class="text-center mb-0">Selamat datang,
            <b>{{ Auth::user()->name }}</b>
            <p class="text-center">Silahkan akses beberapa fitur berikut :</p>
        </h3>
        <p>
        <a class="btn btn-primary" href="http://192.168.0.18/"> Buka Tutup Kunci </a>
        </p>
        <a class="btn btn-primary" href="{{ route('password') }}">Ganti Password</a>
        <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
    @endauth
    @guest
        <!doctype html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>QR Scanner</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <link rel="stylesheet" href={{ ('css/home.css') }}>
        </head>

        <header class="d-flex justify-content-center">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="header-wrap py-5">
                        SILAHKAN SCAN DISINI!!
                    </div>
                </div>
            </div>
        </header>

        <body>
            <div class="container">
            </div>
            <div class="container col-lg-4 py-5">
                <div class="card">
                    <div id="reader" width="600px" height="600px"></div>
                </div>


            </div>

            <script src="https://unpkg.com/html5-qrcode"></script>
            <script type="text/javascript" src={{ ('js/scanner.js') }}></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
            </script>
        </body>

        </html>
    @endguest
@endsection
