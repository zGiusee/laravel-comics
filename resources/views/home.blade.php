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
        <div class="jumbo-container">
            <span class="default-badge-bg">CURRENT SERIES</span>
        </div>

        <div class="container py-5">
            <div class="col-12 py-5">
                <h1>Qua non ci sta nulla ancora...</h1>
            </div>
        </div>

        <div class="my-bg-blue">
            @include ('partials.infoBanner')
        </div>
    </main>

    @include('partials.footer')
</body>

</html>
