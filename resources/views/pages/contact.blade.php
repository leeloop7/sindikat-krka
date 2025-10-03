@extends('layouts.app')

@section('content')
    {{-- Hero z naslovom --}}
    <section class="relative h-72 w-full bg-[url('/images/kontakt.jpg')] bg-cover bg-center">
        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40">
            <h1 class="font-serif text-4xl font-bold text-white" data-aos="fade-up">Kontakt</h1>
        </div>
    </section>

    {{-- Kontaktni podatki + obrazec --}}
    <section class="bg-white py-16">
        <div class="mx-auto grid max-w-6xl grid-cols-1 gap-12 px-6 md:grid-cols-2">

            {{-- Kontaktni podatki --}}
            <div>
                <h2 class="mb-6 font-serif text-2xl font-bold text-gray-800" data-aos="fade-up">Kontaktni podatki</h2>

                <ul class="space-y-4 font-sans text-gray-700">
                    <li class="flex items-start gap-3" data-aos="fade-up" data-aos-delay="100">
                        <x-heroicon-o-building-office class="mt-1 h-5 w-5 text-green-600" />
                        <span>Sindikat Krka, d.o.o.<br>Šmarješka cesta 6, 8000 Novo mesto</span>
                    </li>
                    <li class="flex items-start gap-3" data-aos="fade-up" data-aos-delay="150">
                        <x-heroicon-o-phone class="mt-1 h-5 w-5 text-green-600" />
                        <span>+386 (0)7 331 12 00</span>
                    </li>
                    <li class="flex items-start gap-3" data-aos="fade-up" data-aos-delay="200">
                        <x-heroicon-o-envelope class="mt-1 h-5 w-5 text-green-600" />
                        <span>info@sindikat-krka.si</span>
                    </li>
                    <li class="flex items-start gap-3" data-aos="fade-up" data-aos-delay="250">
                        <x-heroicon-o-globe-alt class="mt-1 h-5 w-5 text-green-600" />
                        <span>www.sindikat-krka.si</span>
                    </li>
                </ul>
            </div>

            {{-- Obrazec --}}
            <div>
                <h2 class="mb-6 font-serif text-2xl font-bold text-gray-800" data-aos="fade-up">Pišite nam</h2>
                <form method="POST" action="#" class="space-y-6 font-sans" data-aos="fade-up" data-aos-delay="100">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Ime in priimek</label>
                        <input type="text" id="name" name="name" required
                            class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600" />
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">E-pošta</label>
                        <input type="email" id="email" name="email" required
                            class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600" />
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Sporočilo</label>
                        <textarea id="message" name="message" rows="4" required
                            class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring-green-600"></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="inline-block rounded-md bg-green-600 px-6 py-3 font-semibold text-white shadow transition hover:bg-green-700">
                            Pošlji sporočilo
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </section>
@endsection
