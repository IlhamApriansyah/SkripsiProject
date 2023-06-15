<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href={{secure_asset('css/bootstrap.min.css') }} rel="stylesheet">
    <link rel="stylesheet" href={{secure_asset('css/main.css') }}>


    <title>@yield('title', $title)</title>
</head>

<body>
    @yield('content')
</body>

    <script src={{secure_asset ('js/jquery.min.js')}}></script>
    <script src={{secure_asset ('js/popper.js')}}></script>
    <script src={{secure_asset ('js/bootstrap.min.js')}}></script>
    <script src={{secure_asset ('js/main.js')}}></script>
</html>