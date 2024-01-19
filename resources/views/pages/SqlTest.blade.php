<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        <!-- Styles -->
    </head>
    <body class="antialiased ">
        <section class="lg:grid">
            <div class="grid grid-cols-2 bg-white">
                <h1>Table User</h1>
                <h1>Table Asset</h1>
            </div>
            <div class="grid grid-cols-2 bg-white">
                <img class="w-1 h-1" src="/img/user.png" alt="">
                <img class="w-10 h-10" src="/img/asset.png" alt="">
            </div>
            <br>
            <br>
            <div class="grid grid-cols-2 bg-white">
                <h1>Hasil Result 1</h1>
                <h1>Hasil Result 2</h1>
            </div>
            <div class="grid grid-cols-2 bg-white">
                <img class="w-1 h-1" src="/img/result1.png" alt="">
                <img class="w-10 h-10" src="/img/result2.png" alt="">
            </div>
        </section>
    </body>
</html>
