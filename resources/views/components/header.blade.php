<header x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 100)" :class="scrolled ? 'shadow py-2' : 'py-8'"
    class="sticky top-0 z-50 bg-white transition-all duration-300">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6">
        {{-- Logo --}}
        <a href="/" class="flex items-center space-x-2 text-2xl font-semibold text-green-600">
            SINDIKAT KRKA
            {{-- optional text if needed --}}
        </a>

        {{-- Navigation --}}
        <nav class="hidden space-x-8 text-xs font-semibold uppercase tracking-wide text-gray-700 md:flex">
            <a href="{{ route('about') }}" class="hover:text-green-600">O sindikatu</a>
            <a href="{{ route('news.index') }}" class="hover:text-green-600">Novice</a>
            <a href="{{ route('register') }}" class="text-green-800 hover:text-green-600">Postani član</a>
            <a href="{{ route('contact') }}" class="hover:text-green-600">Kontakt</a>
        </nav>

        {{-- Icons --}}
        {{-- Icons + User Dropdown --}}
        <div class="hidden items-center space-x-4 text-sm text-gray-500 md:flex">

            {{-- User Dropdown --}}
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="focus:outline-none">
                    <x-heroicon-o-user-circle class="h-5 w-5 text-gray-700 hover:text-green-600" />
                </button>

                <div x-show="open" @click.away="open = false"
                    class="absolute right-0 z-50 mt-2 w-48 rounded-md border border-gray-200 bg-white shadow-lg">
                    @auth
                        <a href="{{ route('dashboard') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Moj profil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100">Odjava</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Prijava</a>
                        <a href="{{ route('register') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Registracija</a>
                    @endauth
                </div>
            </div>

            {{-- Language Switcher --}}
            <span class="flex items-center space-x-1">
                <x-heroicon-o-globe-alt class="h-5 w-5" />
                <span class="text-[11px]">SI</span>
            </span>
        </div>
    </div>
</header>
