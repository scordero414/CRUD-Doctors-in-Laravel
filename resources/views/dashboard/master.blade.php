<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Parcial 1</title>
</head>
<body>
    @include('dashboard.partials.nav-menu')
    <div class="mx-3">
        @include('dashboard.partials.status')
        @yield('contenido')
    </div>
    
    

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>