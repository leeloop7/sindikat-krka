<!DOCTYPE html>
<html lang="sl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sindikat Krka</title>

    {{-- ✅ Google Fonts --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap"
        rel="stylesheet">

    {{-- ✅ AOS Animations --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    {{-- ✅ Tailwind + Vite --}}
    @vite('resources/css/app.css')

    {{-- ✅ Alpine.js (lightweight JS framework) --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-white font-sans text-gray-800">

    {{-- ✅ Init AOS after page loads --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                duration: 600,
                easing: 'ease-out-cubic',
                once: true,
                mirror: false,
            });
        });
    </script>

    <x-header />

    <main class="min-h-screen">
        @yield('content')
    </main>

    <x-footer />

    {{-- ✅ Flash message (if needed) --}}
    @if (session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
            class="fixed bottom-4 right-4 z-50 rounded-md bg-green-600 px-4 py-2 text-white shadow-md transition-opacity duration-500">
            {{ session('success') }}
        </div>
    @endif

</body>

</html>
