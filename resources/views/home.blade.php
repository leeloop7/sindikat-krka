@extends('layouts.app')

@section('content')
    <section class="relative flex h-[50vh] min-h-[500px] items-center justify-center bg-cover bg-center text-center"
        style="background-image: url('https://images.unsplash.com/photo-1548679847-1d4ff48016c7?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MjJ8fHxlbnwwfHx8fHw%3D');">
        <div class="absolute inset-0 bg-black/50"></div> {{-- overlay --}}
        <div class="relative z-10 px-6 text-white">
            <h1 class="font-bol mb-4 text-4xl text-white sm:text-5xl">Skupaj močnejši.</h1>
            <p class="mx-auto max-w-xl text-lg sm:text-xl">Sindikat Krka stoji za pravicami zaposlenih in gradi boljšo
                prihodnost za vse.</p>
            <a href="#o-nas"
                class="mt-6 inline-block rounded-full bg-green-600 px-6 py-3 text-sm font-medium uppercase text-white transition hover:bg-green-700">
                Več o sindikatu
            </a>
        </div>
    </section>

    <x-news :posts="$latestPosts" />

    <div class="relative isolate overflow-hidden bg-green-800">
        <div class="bg-green-700 px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl text-center" data-aos="fade-up">
                <h2 class="text-balance text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                    Pridruži se Sindikatu Krka.
                </h2>
                <p class="mx-auto mt-6 max-w-xl text-pretty text-lg/8 text-green-100">
                    Skupaj smo močnejši. Z včlanitvijo v sindikat pridobiš podporo, zaščito in možnost soodločanja.
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ route('register') }}"
                        class="rounded-md bg-white/15 px-4 py-2.5 text-sm font-semibold text-white ring-1 ring-inset ring-white/10 hover:bg-white/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        Včlani se
                    </a>
                    <a href="{{ route('about') }}" class="text-sm/6 font-semibold text-white hover:text-green-200">
                        Več o nas <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
        <svg viewBox="0 0 1024 1024"
            class="absolute left-1/2 top-1/2 -z-10 size-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]"
            aria-hidden="true">
            <circle cx="512" cy="512" r="512" fill="url(#cta-gradient)" fill-opacity="0.6" />
            <defs>
                <radialGradient id="cta-gradient">
                    <stop stop-color="#4ade80" /> <!-- green-400 -->
                    <stop offset="1" stop-color="#166534" /> <!-- green-800 -->
                </radialGradient>
            </defs>
        </svg>
    </div>
@endsection
