<!DOCTYPE html>
<html lang="sl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sindikat Krka</title>

    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
</head>

<body class="font-sans text-gray-800 bg-white">
    <x-header />

    <main class="min-h-screen">
        @yield('content')
    </main>

    <x-footer />
</body>

</html>
