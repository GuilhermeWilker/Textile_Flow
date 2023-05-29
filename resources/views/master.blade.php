<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/app.css" />
</head>

<body>

    <main class="container">
        <header class="header">
            <div class="img"></div>
            <h3>Calina confecções</h3>
        </header>

        @yield('content')


        <div class="navbar">
            aaaa
        </div>
    </main>
</body>

</html>
