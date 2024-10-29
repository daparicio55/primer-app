<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>En Linea | Inicio</title>
    <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/main.css') }}">
</head>
<body class="px_3">
    @include('partials.header')
    <div class="container mt-4">
        @yield('content')
    </div>
   @include('partials.footer')
</body>
</html>