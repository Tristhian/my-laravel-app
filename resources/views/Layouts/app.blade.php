<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <header class="bg-blue-500 text-center p-6">
        <h1 class="text-xl font-bold">My Laravel Site</h1>
        <nav class="justify-center space-x-4 mt-2">
            <a href="/home">Home</a> 
            <a href="/about">About</a>
        </nav>
    </header>

    <hr>

    {{-- DITO papasok ang laman ng page --}}
    <main>
        @yield('content')
    </main>

    <hr>

    <footer>
        <p>© 2025 My Site</p>
    </footer>

</body>
</html>
