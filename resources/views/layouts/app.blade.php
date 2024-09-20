<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Your App Name')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <!-- Add your navigation here -->
    </nav>

    <main class="container mx-auto mt-6 px-4">
        @yield('content')
    </main>

    <footer class="bg-white mt-12 py-6">
        <!-- Add your footer content here -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>