<!DOCTYPE html>
<html lang="sl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sindikat Krka</title>

    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-white font-sans text-gray-800">
    <x-header />

    <main class="min-h-screen">
        @yield('content')
    </main>

    <x-footer />

    {{-- ✅ Success flash message --}}
    @if (session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
            class="fixed bottom-4 right-4 z-50 rounded-md bg-green-500 px-4 py-2 text-white shadow-md transition-opacity duration-500">
            {{ session('success') }}
        </div>
    @endif
</body>

</html>
