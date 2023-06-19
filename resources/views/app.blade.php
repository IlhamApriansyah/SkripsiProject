<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href={{('css/bootstrap.min.css') }} rel="stylesheet">
    <link rel="stylesheet" href={{('css/main.css') }}>


    <title>@yield('title', $title)</title>
</head>

<body>
    @yield('content')
</body>

    <script src={{ ('js/jquery.min.js')}}></script>
    <script src={{ ('js/popper.js')}}></script>
    <script src={{ ('js/bootstrap.min.js')}}></script>
    <script src={{ ('js/main.js')}}></script>
</html>