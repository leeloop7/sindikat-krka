<x-filament::page>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-4">

        {{-- ✅ RIGHT COLUMN: MAIN CONTENT --}}
        <div class="space-y-4 md:col-span-3">
            <x-filament::card>
                <h2 class="text-2xl font-bold">Welcome, {{ auth()->user()->name }} 👋</h2>
                <p class="mt-2 text-gray-600">Glad to have you back in the admin panel.</p>

            </x-filament::card>

            <x-filament::card>
                <h3 class="text-xl font-semibold">Go to homepage</h3>
                <p class="mt-1 text-sm text-gray-600">Return to the main site.</p>

                <div class="mt-3">
                    <x-filament::button icon="heroicon-o-home" tag="a" href="/" color="primary">
                        Homepage
                    </x-filament::button>
                </div>
            </x-filament::card>
        </div>
    </div>
</x-filament::page>
