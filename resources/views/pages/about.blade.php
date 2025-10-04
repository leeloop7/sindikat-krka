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

    <section class="relative bg-white py-24 sm:py-32" id="vizija">
        <div class="mx-auto max-w-4xl px-6 text-center">
            <h2 class="font-serif text-3xl font-light sm:text-4xl">Vizija in poslanstvo</h2>
            <p class="mt-6 text-lg text-gray-600">
                Naš cilj je ustvariti delovno okolje, kjer se vsak zaposleni počuti slišanega, varnega in cenjenega.
                Delujemo kot glas zaposlenih ter si prizadevamo za pravično obravnavo, varnost in kakovostna delovna mesta.
            </p>
        </div>

        <div class="mx-auto mt-20 grid max-w-6xl grid-cols-1 gap-10 px-6 sm:grid-cols-2 md:grid-cols-2">
            {{-- Vrednota 1 --}}
            <div class="flex flex-col items-center text-center">
                <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-green-100">
                    <svg class="h-7 w-7 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M15.75 4.5a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM21 18a6 6 0 00-6-6H9a6 6 0 00-6 6v1.5a1.5 1.5 0 001.5 1.5h15a1.5 1.5 0 001.5-1.5V18z" />
                    </svg>
                </div>
                <h3 class="text-2xl">Solidarnost in sodelovanje</h3>
                <p class="-mt-2 text-gray-600">Gradimo skupnost, ki se podpira.</p>
            </div>

            {{-- Vrednota 2 --}}
            <div class="flex flex-col items-center text-center">
                <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-green-100">
                    <svg class="h-7 w-7 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M9 3.75A.75.75 0 009.75 3h4.5a.75.75 0 01.75.75v2.5h-6v-2.5zM4.5 6h15v1.5a.75.75 0 01-.75.75h-.75v9.75a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V8.25h-.75a.75.75 0 01-.75-.75V6z" />
                    </svg>
                </div>
                <h3 class="text-2xl">Poštenost in odgovornost</h3>
                <p class="-mt-2 text-gray-600">Ravnamo etično in transparentno.</p>
            </div>

            {{-- Vrednota 3 --}}
            <div class="flex flex-col items-center text-center">
                <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-green-100">
                    <svg class="h-7 w-7 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 3c1.104 0 2 .896 2 2v2h3.5a.5.5 0 01.5.5v.5h-12v-.5a.5.5 0 01.5-.5H10V5c0-1.104.896-2 2-2zm-8 9a9 9 0 1118 0v4.5a2.5 2.5 0 01-2.5 2.5H6.5A2.5 2.5 0 014 16.5V12z" />
                    </svg>
                </div>
                <h3 class="text-2xl">Strokovnost in zaupanje</h3>
                <p class="-mt-2 text-gray-600">Temeljimo na znanju in spoštovanju.</p>
            </div>

            {{-- Vrednota 4 --}}
            <div class="flex flex-col items-center text-center">
                <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-green-100">
                    <svg class="h-7 w-7 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M3 5.25A2.25 2.25 0 015.25 3h13.5A2.25 2.25 0 0121 5.25v13.5A2.25 2.25 0 0118.75 21H5.25A2.25 2.25 0 013 18.75V5.25zM12 7.5a.75.75 0 00-.75.75v3.19l-1.97 1.97a.75.75 0 101.06 1.06l2.5-2.5V8.25A.75.75 0 0012 7.5z" />
                    </svg>
                </div>
                <h3 class="text-2xl">Aktivna komunikacija</h3>
                <p class="-mt-2 text-gray-600">Spodbujamo dialog in poslušanje.</p>
            </div>
        </div>
    </section>

    {{-- Zakaj postati član – prenovljeno, dark varianta --}}
    <section class="relative bg-gray-900 py-24 text-white sm:py-32" id="zakaj-postati-clan">
        <div class="mx-auto max-w-4xl px-6 text-center">
            <h2 class="font-serif text-3xl font-light text-green-400 sm:text-4xl">Zakaj postati član?</h2>
            <p class="mt-6 text-lg text-gray-400">
                S članstvom v Sindikatu Krka pridobiš podporo, zaščito in številne ugodnosti.
                Postani del skupnosti, ki si prizadeva za boljše delovne pogoje in pravičnost.
            </p>
        </div>

        <div class="mx-auto mt-20 grid max-w-6xl grid-cols-1 gap-10 px-6 sm:grid-cols-2 md:grid-cols-3">
            {{-- Ugodnost 1 --}}
            <div class="flex flex-col items-center text-center">
                <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-green-600/20">
                    <svg class="h-7 w-7 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M15.75 4.5a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM21 18a6 6 0 00-6-6H9a6 6 0 00-6 6v1.5a1.5 1.5 0 001.5 1.5h15a1.5 1.5 0 001.5-1.5V18z" />
                    </svg>
                </div>
                <h3 class="text-2xl text-white">Pravna zaščita</h3>
                <p class="-mt-2 text-gray-400">Dostop do pravnega svetovanja in pomoči pri delovnih sporih.</p>
            </div>

            {{-- Ugodnost 2 --}}
            <div class="flex flex-col items-center text-center">
                <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-green-600/20">
                    <svg class="h-7 w-7 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M5.25 6a.75.75 0 000 1.5H6v9.25A2.25 2.25 0 008.25 19h7.5A2.25 2.25 0 0018 16.75V7.5h.75a.75.75 0 000-1.5h-13.5zM8.25 4.5A.75.75 0 007.5 5.25v.75h9v-.75a.75.75 0 00-.75-.75h-7.5z" />
                    </svg>
                </div>
                <h3 class="text-2xl text-white">Glas zaposlenih</h3>
                <p class="-mt-2 text-gray-400">Aktivno sodelovanje pri oblikovanju delovnih pogojev in pravilnikov.</p>
            </div>

            {{-- Ugodnost 3 --}}
            <div class="flex flex-col items-center text-center">
                <div class="mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-green-600/20">
                    <svg class="h-7 w-7 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 21.75a9.75 9.75 0 100-19.5 9.75 9.75 0 000 19.5zM9 10.5a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm3 6.375a6.375 6.375 0 01-5.784-3.75h11.568A6.375 6.375 0 0112 16.875zM15 10.5a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl text-white">Ekskluzivne ugodnosti</h3>
                <p class="-mt-2 text-gray-400">Popusti, izleti, kulturne prireditve, športni dogodki in več.</p>
            </div>
        </div>

        {{-- CTA gumb --}}
        <div class="mt-16 text-center">
            <a href="{{ route('register') }}"
                class="inline-block rounded-full bg-green-600 px-8 py-3 text-base font-semibold text-white shadow-md transition hover:bg-green-700 hover:shadow-lg">
                Pridruži se Sindikatu Krka
            </a>
        </div>
    </section>

    <section class="bg-gray-50 py-24 sm:py-32" id="dokumenti" data-aos="fade-up">
        <div class="mx-auto max-w-4xl px-6">
            <h2 class="mb-10 text-center font-serif text-3xl font-bold text-gray-800">
                Dokumenti in uradni akti
            </h2>

            <ul class="space-y-6 font-sans">
                @foreach ([
            [
                'title' => 'Statut Sindikata Krka',
                'desc' => 'Osnovni pravni dokument sindikata',
                'url' => '/docs/statut-sindikata.pdf',
            ],
            [
                'title' => 'Kolektivna pogodba 2024',
                'desc' => 'Aktualna pogodba za leto 2024',
                'url' => '/docs/kolektivna-pogodba.pdf',
            ],
            [
                'title' => 'Pravilnik o solidarnostni pomoči',
                'desc' => 'Pogoji in postopek uveljavljanja pomoči',
                'url' => '/docs/pravilnik-solidarnostna.pdf',
            ],
        ] as $doc)
                    <li
                        class="flex items-center justify-between rounded-xl bg-white px-6 py-5 shadow transition hover:shadow-md">
                        <div class="flex items-center gap-4">
                            <div class="text-3xl text-green-600">📄</div>
                            <div>
                                <p class="text-base font-semibold text-gray-800">{{ $doc['title'] }}</p>
                                <p class="text-sm text-gray-500">{{ $doc['desc'] }}</p>
                            </div>
                        </div>
                        <a href="{{ $doc['url'] }}" target="_blank"
                            class="inline-flex items-center gap-2 rounded-md bg-green-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition hover:bg-green-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                            Prenesi PDF
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- Mnenja članov --}}
    <section class="bg-gradient-to-b from-gray-900 to-gray-800 py-20 text-white" data-aos="fade-up">
        <div class="mx-auto max-w-6xl px-6">
            <h2 class="mb-14 text-center font-serif text-3xl font-bold text-white">
                Kaj pravijo naši člani
            </h2>

            <div class="grid gap-8 md:grid-cols-3">
                {{-- Mnenje 1 --}}
                <div class="relative flex flex-col justify-between rounded-xl bg-gray-950/70 p-6 shadow-xl ring-1 ring-gray-700 transition hover:shadow-2xl"
                    data-aos="zoom-in">
                    {{-- Ikona (Heroicons duotone) --}}
                    <svg class="absolute -top-5 left-6 h-10 w-10 text-green-500" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M2 5a3 3 0 013-3h14a3 3 0 013 3v8a3 3 0 01-3 3h-6.586l-4.707 4.707A1 1 0 016 20v-4H5a3 3 0 01-3-3V5z" />
                    </svg>

                    <p class="mt-6 italic text-gray-300">"Ko sem potreboval pravno pomoč, je sindikat takoj priskočil na
                        pomoč. Res sem hvaležen za njihovo podporo."</p>
                    <div class="mt-6 text-right text-sm font-semibold text-green-400">
                        – Matej K.<br><span class="text-xs font-normal text-gray-400">član od 2017</span>
                    </div>
                </div>

                {{-- Mnenje 2 --}}
                <div class="relative flex flex-col justify-between rounded-xl bg-gray-950/70 p-6 shadow-xl ring-1 ring-gray-700 transition hover:shadow-2xl"
                    data-aos="zoom-in" data-aos-delay="100">
                    <svg class="absolute -top-5 left-6 h-10 w-10 text-green-500" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M2 5a3 3 0 013-3h14a3 3 0 013 3v8a3 3 0 01-3 3h-6.586l-4.707 4.707A1 1 0 016 20v-4H5a3 3 0 01-3-3V5z" />
                    </svg>
                    <p class="mt-6 italic text-gray-300">"Z ženo redno izkoristiva popuste pri sindikalnih izletih.
                        Organizacija je vedno odlična."</p>
                    <div class="mt-6 text-right text-sm font-semibold text-green-400">
                        – Andreja in Peter Z.<br><span class="text-xs font-normal text-gray-400">člana od 2019</span>
                    </div>
                </div>

                {{-- Mnenje 3 --}}
                <div class="relative flex flex-col justify-between rounded-xl bg-gray-950/70 p-6 shadow-xl ring-1 ring-gray-700 transition hover:shadow-2xl"
                    data-aos="zoom-in" data-aos-delay="200">
                    <svg class="absolute -top-5 left-6 h-10 w-10 text-green-500" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M2 5a3 3 0 013-3h14a3 3 0 013 3v8a3 3 0 01-3 3h-6.586l-4.707 4.707A1 1 0 016 20v-4H5a3 3 0 01-3-3V5z" />
                    </svg>
                    <p class="mt-6 italic text-gray-300">"V najtežjih trenutkih po nesreči je bila solidarnostna pomoč
                        ključna. Hvala sindikatu za podporo."</p>
                    <div class="mt-6 text-right text-sm font-semibold text-green-400">
                        – Tanja B.<br><span class="text-xs font-normal text-gray-400">članica od 2015</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ sekcija z animacijo in accordion funkcionalnostjo (en odprt naenkrat) --}}
    <section class="bg-white py-20" id="faq" x-data="{ open: null }">
        <div class="mx-auto max-w-4xl px-6">
            <h2 class="mb-12 text-center font-serif text-3xl font-bold text-gray-800" data-aos="fade-up">
                Pogosta vprašanja
            </h2>

            <div class="space-y-4 font-sans" data-aos="fade-up" data-aos-delay="100">

                {{-- Vprašanje 1 --}}
                <div class="rounded-lg border border-gray-200 bg-gray-50 shadow-sm transition hover:shadow-md">
                    <button @click="open === 1 ? open = null : open = 1"
                        class="flex w-full items-center justify-between p-5 text-left text-lg font-medium text-gray-700 transition-colors hover:text-green-600">
                        <span class="flex items-center gap-2">
                            <svg class="h-5 w-5 transform text-green-600 transition-transform duration-300"
                                :class="{ 'rotate-90': open === 1 }" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            Kako se lahko včlanim v sindikat?
                        </span>
                    </button>
                    <div x-show="open === 1" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-screen"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 max-h-screen" x-transition:leave-end="opacity-0 max-h-0"
                        class="overflow-hidden px-5 pb-4 text-sm leading-relaxed text-gray-600">
                        Preko obrazca na naši spletni strani ali osebno pri sindikalnem zaupniku.
                    </div>
                </div>

                {{-- Vprašanje 2 --}}
                <div class="rounded-lg border border-gray-200 bg-gray-50 shadow-sm transition hover:shadow-md">
                    <button @click="open === 2 ? open = null : open = 2"
                        class="flex w-full items-center justify-between p-5 text-left text-lg font-medium text-gray-700 transition-colors hover:text-green-600">
                        <span class="flex items-center gap-2">
                            <svg class="h-5 w-5 transform text-green-600 transition-transform duration-300"
                                :class="{ 'rotate-90': open === 2 }" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            Kaj če se situacija v službi zaplete?
                        </span>
                    </button>
                    <div x-show="open === 2" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-screen"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 max-h-screen" x-transition:leave-end="opacity-0 max-h-0"
                        class="overflow-hidden px-5 pb-4 text-sm leading-relaxed text-gray-600">
                        Sindikat nudi pravno pomoč in svetovanje v primeru konfliktov z delodajalcem.
                    </div>
                </div>

                {{-- Vprašanje 3 --}}
                <div class="rounded-lg border border-gray-200 bg-gray-50 shadow-sm transition hover:shadow-md">
                    <button @click="open === 3 ? open = null : open = 3"
                        class="flex w-full items-center justify-between p-5 text-left text-lg font-medium text-gray-700 transition-colors hover:text-green-600">
                        <span class="flex items-center gap-2">
                            <svg class="h-5 w-5 transform text-green-600 transition-transform duration-300"
                                :class="{ 'rotate-90': open === 3 }" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                            Ali članarina vključuje zavarovanja ali ugodnosti?
                        </span>
                    </button>
                    <div x-show="open === 3" x-transition:enter="transition ease-out duration-300"
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
