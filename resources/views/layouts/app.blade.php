<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hexlet Blog - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="container container-fluid mb-4 mt-2">
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a href="{{ route('articles.index') }}" class="nav-link">Articles</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('articles.create') }}" class="nav-link">Create new article</a>
            </li>

        </ul>
    </div>



    @yield('messages')

    <div class="container">
        <h1>@yield('header')</h1>
        <div>
            @yield('content')
        </div>
    </div>
</body>

</html>
