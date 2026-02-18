<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=DynaPuff:wght@400..700&family=Fascinate+Inline&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Nosifer&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Permanent+Marker&family=Roboto:ital,wght@0,100..900;1,100..900&family=Share+Tech+Mono&display=swap"
        rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Trains</title>
</head>

<body>
    @include('partials.header')
    @yield('content')
</body>

</html>
