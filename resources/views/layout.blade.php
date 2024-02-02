<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alfasoft - @yield('title')</title>

    {{-- sass e javascript --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>  
    <div class="container">
        {{-- conteúdo --}}
        @yield('content')
    </div>
</body>
</html>
