<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('tilulo')</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    @yield('styles')
</head>
<body>
    <hr>
    | <a href="{{ route('admin') }}">Home</a>
    | <a href="{{ route('admin_sizes_c.index') }}">Tamaños</a>
    | <a href="{{ route('admin_ingredients_c.index') }}">Ingredientes</a>
    | <a href="{{ route('admin_specialties_c.index') }}">Especialidades</a>
    <hr>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    <hr>
    @yield('seccion')
    <hr>
    @yield('contenido')
    <hr>
    @yield('scripts')
</body>
</html>