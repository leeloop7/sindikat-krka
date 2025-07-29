<header x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 100)" :class="scrolled ? 'shadow py-2' : 'py-8'"
    class="sticky top-0 z-50 transition-all duration-300 bg-white">
    <div class="flex items-center justify-between px-6 mx-auto max-w-7xl">
        {{-- Logo --}}
        <a href="/" class="flex items-center space-x-2 text-2xl font-semibold text-green-600">
            SINDIKAT KRKA
            {{-- optional text if needed --}}
        </a>

        {{-- Navigation --}}
        <nav class="hidden space-x-8 text-xs font-semibold tracking-wide text-gray-700 uppercase md:flex">
            <a href="#o-nas" class="hover:text-green-600">O sindikatu</a>
            <a href="#novice" class="hover:text-green-600">Novice</a>
            <a href="#dokumentacija" class="text-green-800 hover:text-green-600">Postani član</a>
            <a href="#kontakt" class="hover:text-green-600">Kontakt</a>
        </nav>

        {{-- Icons --}}
        <div class="items-center hidden space-x-4 text-sm text-gray-500 md:flex">
            <x-heroicon-o-user-circle class="w-5 h-5" />
            <span class="flex items-center space-x-1">
                <x-heroicon-o-globe-alt class="w-5 h-5" />
                <span class="text-[11px]">SI</span>
            </span>
        </div>
    </div>
</header>
