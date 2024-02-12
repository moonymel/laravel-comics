<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header class="py-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="logo">
                    <img src="{{ Vite:asset('resources/img/dc-logo.png') }}" alt="">
                </div>
                <div class="links">
                    <ul class="list-unstyled d-inline-block px-4">
                        <li class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}">characters</li>
                        <li class="{{ Route::currentRouteName() === 'homepage' ? 'active' : '' }}">comics</li>
                        <li class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">movies</li>
                        <li class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">tv</li>
                        <li class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}">games</li>
                        <li class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}">collectibles</li>
                        <li class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}">videos</li>
                        <li class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">fans</li>
                        <li class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">news</li>
                        <li class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">shop</li>
                    </ul>
                    search
                </div>
            </div>
        </div>
    </header>
</body>