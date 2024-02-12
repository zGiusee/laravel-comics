<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <main>
        <div class="container py-5">
            <div class="col-12 py-5">
                <h1>Qua non ci sta nulla ancora...</h1>
            </div>
        </div>
    </main>
    @include ('partials.infoBanner')
    @include('partials.footer')
</body>

</html>
