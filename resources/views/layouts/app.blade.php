<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'My Portfolio') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <x-navbar />

    <main class="container mx-auto p-6">
        @yield('content')
    </main>

    <x-footer />
    @vite('resources/js/app.js')
</body>
</html>
