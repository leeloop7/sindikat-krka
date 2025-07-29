<footer class="py-12 text-gray-700 bg-gray-100 border-t border-gray-200">
    <div class="grid grid-cols-1 gap-10 px-6 mx-auto max-w-7xl sm:grid-cols-2 lg:grid-cols-4">
        <!-- Logo / Brand -->
        <div>
            <h3 class="text-xl font-bold text-green-600 uppercase">Sindikat Krka</h3>
            <p class="mt-2 text-sm text-gray-600">Skupaj za pravice delavcev.</p>
        </div>

        <!-- Navigation -->
        <div>
            <h4 class="mb-3 font-semibold text-gray-900">Navigacija</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="/" class="hover:text-green-600">Domov</a></li>
                <li><a href="#o-nas" class="hover:text-green-600">O sindikatu</a></li>
                <li><a href="#novice" class="hover:text-green-600">Novice</a></li>
                <li><a href="#kontakt" class="hover:text-green-600">Kontakt</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h4 class="mb-3 font-semibold text-gray-900">Kontakt</h4>
            <p class="text-sm text-gray-600">E-pošta: <a href="mailto:info@sindikat-krka.si"
                    class="hover:text-green-600">info@sindikat-krka.si</a></p>
            <p class="text-sm text-gray-600">Telefon: 031 123 456</p>
        </div>

        <!-- Social / Admin -->
        <div>
            <h4 class="mb-3 font-semibold text-gray-900">Povezave</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="/admin" class="hover:text-green-600">Administracija</a></li>
                <li><a href="#" class="hover:text-green-600">Zasebnost</a></li>
                <li><a href="#" class="hover:text-green-600">Pogoji uporabe</a></li>
            </ul>
        </div>
    </div>

    <div class="mt-12 text-sm text-center text-gray-500">
        &copy; {{ now()->year }} Sindikat Krka. Vse pravice pridržane.
    </div>
</footer>
