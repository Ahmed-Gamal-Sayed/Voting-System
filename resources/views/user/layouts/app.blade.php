<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Voting System - Candidate</a>
            <button class="navbar-brand">Log in</button>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="bg-dark text-white py-4 margin-top-10">
        <div class="container">
            <div class="text-center mt-3">
                <p>&copy; 2025 Your Company. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>