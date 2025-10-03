@extends('layouts.app')

@section('content')
    {{-- Hero Image --}}
    <section class="relative h-[400px] w-full overflow-hidden">
        <img src="https://images.unsplash.com/photo-1583321500900-82807e458f3c?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="O Sindikatu" class="absolute inset-0 z-0 h-full w-full object-cover object-center" loading="lazy">
        <div x-data="{ show: false }" x-intersect.once="show = true"
            class="absolute inset-0 z-10 flex items-center justify-center bg-gradient-to-b from-black/60 to-black/40">
            <h1 x-show="show" x-transition.duration.1000ms
                class="z-20 font-serif text-4xl font-extrabold tracking-wide text-white md:text-5xl">
                O sindikatu Krka
            </h1>
        </div>
    </section>

    {{-- Uvodni opis --}}
    <section class="bg-gray-50 py-20">
        <div class="mx-auto max-w-4xl px-6 font-sans text-gray-700" x-data
            x-intersect.once="$el.classList.add('animate-fade-in')">
            <p class="mb-6 text-lg leading-relaxed">
                Sindikat Krka je organizacija zaposlenih, ki deluje z namenom varovanja pravic, izboljševanja delovnih
                pogojev in zagotavljanja socialne varnosti svojih članov.
            </p>
            <p class="mb-8 text-lg leading-relaxed">
                Vključitev v sindikat prinaša številne ugodnosti, kot so:
            </p>
            <ul class="mb-12 space-y-3 text-base leading-relaxed">
                <li class="flex items-start gap-3">
                    <x-heroicon-o-check class="mt-1 h-5 w-5 text-green-600" />
                    <span>Pravna pomoč in svetovanje</span>
                </li>
                <li class="flex items-start gap-3">
                    <x-heroicon-o-check class="mt-1 h-5 w-5 text-green-600" />
                    <span>Solidarnostna pomoč v primeru bolezni, nesreče ali težkih življenjskih razmer</span>
                </li>
                <li class="flex items-start gap-3">
                    <x-heroicon-o-check class="mt-1 h-5 w-5 text-green-600" />
                    <span>Dostop do sindikalnih izletov, kulturnih in športnih dogodkov</span>
                </li>
                <li class="flex items-start gap-3">
                    <x-heroicon-o-check class="mt-1 h-5 w-5 text-green-600" />
                    <span>Sodelovanje pri oblikovanju delovnih pogojev</span>
                </li>
                <li class="flex items-start gap-3">
                    <x-heroicon-o-check class="mt-1 h-5 w-5 text-green-600" />
                    <span>Posebne ugodnosti pri določenih ponudnikih storitev</span>
                </li>
            </ul>
            <div class="flex flex-col gap-4 sm:flex-row">
                <a href="{{ route('register') }}"
                    class="inline-block rounded bg-green-700 px-6 py-3 text-sm font-semibold uppercase text-white shadow-md transition hover:scale-105 hover:bg-green-800">
                    Postani član
                </a>
                <a href="{{ route('contact') }}"
                    class="inline-block rounded border border-green-700 px-6 py-3 text-sm font-semibold uppercase text-green-700 transition hover:scale-105 hover:bg-green-100">
                    Kontaktiraj nas
                </a>
            </div>
        </div>
    </section>

    {{-- Vizualni prelom --}}
    <div class="h-12 w-full bg-gradient-to-r from-green-100 to-green-200"></div>

    {{-- Vizija in vrednote --}}
    <section class="bg-white py-20" data-aos="fade-up">
        {{-- Light background visual --}}
        <div
            class="pointer-events-none absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/white-wall-3.png')] opacity-5">
        </div>

        <div class="relative mx-auto max-w-4xl px-6">
            <h2 class="aos-init mb-6 text-center font-serif text-3xl font-bold tracking-tight text-gray-800"
                data-aos="fade-up">
                Vizija in poslanstvo
            </h2>

            <p class="aos-init mb-10 text-center font-sans text-lg leading-relaxed text-gray-700" data-aos="fade-up"
                data-aos-delay="100">
                Naš cilj je ustvariti delovno okolje, kjer se vsak zaposleni počuti slišanega, varnega in cenjenega.
                Delujemo kot glas zaposlenih ter si prizadevamo za pravično obravnavo, varnost in kakovostna delovna mesta.
            </p>

            <h3 class="aos-init mb-4 font-serif text-xl font-semibold text-gray-800" data-aos="fade-up"
                data-aos-delay="200">
                Naše temeljne vrednote
            </h3>

            <ul class="grid grid-cols-1 gap-4 font-sans text-gray-700 sm:grid-cols-2 md:grid-cols-2">
                <li class="aos-init flex items-start gap-3 rounded-lg bg-gray-50 p-4 shadow-sm" data-aos="fade-up"
                    data-aos-delay="300">
                    <span class="text-xl text-green-600">🤝</span>
                    <span><strong>Solidarnost in sodelovanje</strong><br />Gradimo skupnost, ki se podpira.</span>
                </li>
                <li class="aos-init flex items-start gap-3 rounded-lg bg-gray-50 p-4 shadow-sm" data-aos="fade-up"
                    data-aos-delay="400">
                    <span class="text-xl text-green-600">⚖️</span>
                    <span><strong>Poštenost in odgovornost</strong><br />Ravnamo etično in transparentno.</span>
                </li>
                <li class="aos-init flex items-start gap-3 rounded-lg bg-gray-50 p-4 shadow-sm" data-aos="fade-up"
                    data-aos-delay="500">
                    <span class="text-xl text-green-600">📚</span>
                    <span><strong>Strokovnost in zaupanje</strong><br />Temeljimo na znanju in spoštovanju.</span>
                </li>
                <li class="aos-init flex items-start gap-3 rounded-lg bg-gray-50 p-4 shadow-sm" data-aos="fade-up"
                    data-aos-delay="600">
                    <span class="text-xl text-green-600">📢</span>
                    <span><strong>Aktivna komunikacija</strong><br />Spodbujamo dialog in poslušanje.</span>
                </li>
            </ul>
        </div>
    </section>

    {{-- Dokumenti --}}
    <section class="bg-gray-50 py-20" data-aos="fade-up">
        <div class="mx-auto max-w-4xl px-6">
            <h2 class="mb-10 text-center font-serif text-2xl font-bold text-gray-800">
                Dokumenti in uradni akti
            </h2>

            <ul class="space-y-6 font-sans">
                {{-- Dokument: Statut --}}
                <li
                    class="flex flex-col items-start justify-between rounded-lg bg-white p-6 shadow-sm transition hover:shadow-md sm:flex-row sm:items-center sm:gap-4">
                    <div class="flex items-center gap-4">
                        <div class="text-3xl text-green-600">📄</div>
                        <div>
                            <p class="text-base font-semibold text-gray-800">Statut Sindikata Krka</p>
                            <p class="text-sm text-gray-500">Osnovni pravni dokument sindikata</p>
                        </div>
                    </div>
                    <a href="/docs/statut-sindikata.pdf" target="_blank"
                        class="mt-4 inline-flex items-center gap-2 rounded-md bg-green-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-green-700 sm:mt-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Prenesi PDF
                    </a>
                </li>

                {{-- Dokument: Kolektivna pogodba --}}
                <li
                    class="flex flex-col items-start justify-between rounded-lg bg-white p-6 shadow-sm transition hover:shadow-md sm:flex-row sm:items-center sm:gap-4">
                    <div class="flex items-center gap-4">
                        <div class="text-3xl text-green-600">📄</div>
                        <div>
                            <p class="text-base font-semibold text-gray-800">Kolektivna pogodba 2024</p>
                            <p class="text-sm text-gray-500">Aktualna pogodba za leto 2024</p>
                        </div>
                    </div>
                    <a href="/docs/kolektivna-pogodba.pdf" target="_blank"
                        class="mt-4 inline-flex items-center gap-2 rounded-md bg-green-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-green-700 sm:mt-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Prenesi PDF
                    </a>
                </li>

                {{-- Dokument: Pravilnik o solidarnostni pomoči --}}
                <li
                    class="flex flex-col items-start justify-between rounded-lg bg-white p-6 shadow-sm transition hover:shadow-md sm:flex-row sm:items-center sm:gap-4">
                    <div class="flex items-center gap-4">
                        <div class="text-3xl text-green-600">📄</div>
                        <div>
                            <p class="text-base font-semibold text-gray-800">Pravilnik o solidarnostni pomoči</p>
                            <p class="text-sm text-gray-500">Pogoji in postopek uveljavljanja pomoči</p>
                        </div>
                    </div>
                    <a href="/docs/pravilnik-solidarnostna.pdf" target="_blank"
                        class="mt-4 inline-flex items-center gap-2 rounded-md bg-green-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-green-700 sm:mt-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Prenesi PDF
                    </a>
                </li>
            </ul>
        </div>
    </section>

    {{-- Mnenja članov --}}
    <section class="bg-white py-20" data-aos="fade-up">
        <div class="mx-auto max-w-6xl px-6">
            <h2 class="mb-14 text-center font-serif text-3xl font-bold text-gray-800">
                Kaj pravijo naši člani
            </h2>

            <div class="grid gap-8 md:grid-cols-3">
                {{-- Mnenje 1 --}}
                <div class="relative flex flex-col justify-between rounded-xl bg-gray-50 p-6 shadow-md transition hover:shadow-lg"
                    data-aos="zoom-in">
                    <svg class="absolute -top-5 left-6 h-10 w-10 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M9.172 16.172a4 4 0 115.656-5.656L12 11.172l-2.828-2.828a4 4 0 015.656 5.656L12 18l-2.828-2.828z" />
                    </svg>
                    <p class="mt-6 italic text-gray-700">"Ko sem potreboval pravno pomoč, je sindikat takoj priskočil na
                        pomoč. Res sem hvaležen za njihovo podporo."</p>
                    <div class="mt-6 text-right text-sm font-semibold text-green-700">
                        – Matej K.<br><span class="text-xs font-normal text-gray-500">član od 2017</span>
                    </div>
                </div>

                {{-- Mnenje 2 --}}
                <div class="relative flex flex-col justify-between rounded-xl bg-gray-50 p-6 shadow-md transition hover:shadow-lg"
                    data-aos="zoom-in" data-aos-delay="100">
                    <svg class="absolute -top-5 left-6 h-10 w-10 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M9.172 16.172a4 4 0 115.656-5.656L12 11.172l-2.828-2.828a4 4 0 015.656 5.656L12 18l-2.828-2.828z" />
                    </svg>
                    <p class="mt-6 italic text-gray-700">"Z ženo redno izkoristiva popuste pri sindikalnih izletih.
                        Organizacija je vedno odlična."</p>
                    <div class="mt-6 text-right text-sm font-semibold text-green-700">
                        – Andreja in Peter Z.<br><span class="text-xs font-normal text-gray-500">člana od 2019</span>
                    </div>
                </div>

                {{-- Mnenje 3 --}}
                <div class="relative flex flex-col justify-between rounded-xl bg-gray-50 p-6 shadow-md transition hover:shadow-lg"
                    data-aos="zoom-in" data-aos-delay="200">
                    <svg class="absolute -top-5 left-6 h-10 w-10 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M9.172 16.172a4 4 0 115.656-5.656L12 11.172l-2.828-2.828a4 4 0 015.656 5.656L12 18l-2.828-2.828z" />
                    </svg>
                    <p class="mt-6 italic text-gray-700">"V najtežjih trenutkih po nesreči je bila solidarnostna pomoč
                        ključna. Hvala sindikatu za podporo."</p>
                    <div class="mt-6 text-right text-sm font-semibold text-green-700">
                        – Tanja B.<br><span class="text-xs font-normal text-gray-500">članica od 2015</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Zakaj postati član – dark variant --}}
    <section class="relative overflow-hidden bg-gray-900 py-20 text-gray-100" id="zakaj-postati-clan">
        <div class="mx-auto max-w-6xl px-6">
            <h2 class="mb-14 text-center font-serif text-3xl font-bold text-green-400" data-aos="fade-up">
                Zakaj postati član?
            </h2>

            <div class="grid grid-cols-1 gap-8 font-sans sm:grid-cols-2 md:grid-cols-3">
                {{-- Kartica 1 --}}
                <div class="group relative rounded-xl bg-gray-800 p-8 shadow-md transition hover:shadow-xl"
                    data-aos="zoom-in" data-aos-delay="50">
                    <div
                        class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-green-600/20 text-2xl text-green-400">
                        🛡️
                    </div>
                    <h3 class="mb-2 text-lg font-semibold text-white">Pravna zaščita</h3>
                    <p class="text-sm text-gray-400">Dostop do pravnega svetovanja in pomoči pri delovnih sporih.</p>
                </div>

                {{-- Kartica 2 --}}
                <div class="group relative rounded-xl bg-gray-800 p-8 shadow-md transition hover:shadow-xl"
                    data-aos="zoom-in" data-aos-delay="100">
                    <div
                        class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-green-600/20 text-2xl text-green-400">
                        💬
                    </div>
                    <h3 class="mb-2 text-lg font-semibold text-white">Glas zaposlenih</h3>
                    <p class="text-sm text-gray-400">Aktivno sodelovanje pri oblikovanju delovnih pogojev in pravilnikov.
                    </p>
                </div>

                {{-- Kartica 3 --}}
                <div class="group relative rounded-xl bg-gray-800 p-8 shadow-md transition hover:shadow-xl"
                    data-aos="zoom-in" data-aos-delay="150">
                    <div
                        class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-green-600/20 text-2xl text-green-400">
                        🏷️
                    </div>
                    <h3 class="mb-2 text-lg font-semibold text-white">Ekskluzivne ugodnosti</h3>
                    <p class="text-sm text-gray-400">Popusti, izleti, kulturne prireditve, športni dogodki in več.</p>
                </div>
            </div>

            {{-- CTA gumb --}}
            <div class="mt-16 text-center" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('register') }}"
                    class="inline-block rounded-full bg-green-600 px-8 py-3 text-base font-semibold text-white shadow-md transition hover:bg-green-700 hover:shadow-lg">
                    Pridruži se Sindikatu Krka
                </a>
            </div>
        </div>
    </section>

    {{-- FAQ sekcija z animacijo in accordion funkcionalnostjo --}}
    <section class="bg-white py-20" id="faq" x-data="{ open: null }">
        <div class="mx-auto max-w-4xl px-6">
            <h2 class="mb-12 text-center font-serif text-3xl font-bold text-gray-800" data-aos="fade-up">
                Pogosta vprašanja
            </h2>

            <div class="space-y-4 font-sans" data-aos="fade-up" data-aos-delay="100">

                {{-- Vprašanje 1 --}}
                <div class="rounded-lg border border-gray-200 bg-gray-50 shadow-sm transition hover:shadow-md"
                    x-data="{ id: 1 }">
                    <button @click="open === id ? open = null : open = id"
                        class="flex w-full items-center justify-between p-5 text-left text-lg font-medium text-gray-700 transition-colors hover:text-green-600">
                        <span class="flex items-center gap-2">
                            <svg class="h-5 w-5 transform text-green-600 transition-transform duration-300"
                                :class="{ 'rotate-90': open === id }" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            Kako se lahko včlanim v sindikat?
                        </span>
                    </button>
                    <div x-show="open === id" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-screen"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 max-h-screen" x-transition:leave-end="opacity-0 max-h-0"
                        class="overflow-hidden px-5 pb-4 text-sm leading-relaxed text-gray-600">
                        Preko obrazca na naši spletni strani ali osebno pri sindikalnem zaupniku.
                    </div>
                </div>

                {{-- Vprašanje 2 --}}
                <div class="rounded-lg border border-gray-200 bg-gray-50 shadow-sm transition hover:shadow-md"
                    x-data="{ id: 2 }">
                    <button @click="open === id ? open = null : open = id"
                        class="flex w-full items-center justify-between p-5 text-left text-lg font-medium text-gray-700 transition-colors hover:text-green-600">
                        <span class="flex items-center gap-2">
                            <svg class="h-5 w-5 transform text-green-600 transition-transform duration-300"
                                :class="{ 'rotate-90': open === id }" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            Kaj če se situacija v službi zaplete?
                        </span>
                    </button>
                    <div x-show="open === id" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-screen"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 max-h-screen" x-transition:leave-end="opacity-0 max-h-0"
                        class="overflow-hidden px-5 pb-4 text-sm leading-relaxed text-gray-600">
                        Sindikat nudi pravno pomoč in svetovanje v primeru konfliktov z delodajalcem.
                    </div>
                </div>

                {{-- Vprašanje 3 --}}
                <div class="rounded-lg border border-gray-200 bg-gray-50 shadow-sm transition hover:shadow-md"
                    x-data="{ id: 3 }">
                    <button @click="open === id ? open = null : open = id"
                        class="flex w-full items-center justify-between p-5 text-left text-lg font-medium text-gray-700 transition-colors hover:text-green-600">
                        <span class="flex items-center gap-2">
                            <svg class="h-5 w-5 transform text-green-600 transition-transform duration-300"
                                :class="{ 'rotate-90': open === id }" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            Ali članarina vključuje zavarovanja ali ugodnosti?
                        </span>
                    </button>
                    <div x-show="open === id" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-screen"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 max-h-screen" x-transition:leave-end="opacity-0 max-h-0"
                        class="overflow-hidden px-5 pb-4 text-sm leading-relaxed text-gray-600">
                        Da, vključuje različne popuste, pravno pomoč in dostop do ugodnosti naših partnerjev.
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
