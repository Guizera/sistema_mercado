<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Places - developed by Guilherme Cunha">
    <meta name="description" content="site de lugares">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bevicred</title>
    {{--  css  --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
    @yield('conteudo')
 {{--  javascript  --}}
 <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
 <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
</body>
</html>