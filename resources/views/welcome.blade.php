<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Data Api</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body style="padding:2rem;">
        <header>
            <h1>Data Apis</h1>
        </header>
        <main>
            <p>A little project to provide some data apis.</p>
            <p>Here is how the <a href="{{ route('ssb.index') }}" target="_blank">ssb api</a> looks like</p>
        </main>
        <footer>
            <p>Dive into the code on <a href="https://github.com/hkcoffeeo/data-api" target="_blank">github</a>.</p>
        </footer>
    </body>
</html>
