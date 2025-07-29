<div class="py-24 bg-white sm:py-32">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
        <div class="max-w-2xl mx-auto lg:mx-0">
            <h2 class="text-4xl font-semibold tracking-tight text-gray-900 text-pretty sm:text-5xl">Zadnje novice</h2>
            <p class="mt-2 text-gray-600 text-lg/8">Ostanite na tekočem z našimi objavami in novicami.</p>
        </div>

        <div
            class="grid max-w-2xl grid-cols-1 pt-10 mx-auto mt-10 border-t border-gray-200 gap-x-8 gap-y-16 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach ($posts as $post)
                <article class="flex flex-col items-start justify-between max-w-xl">
                    <div class="relative group">
                        <p class="text-sm text-gray-500">{{ $post->created_at->format('d.m.Y') }}</p>
                        <h3 class="mt-2 font-semibold text-gray-900 text-lg/6 group-hover:text-green-700">
                            <span class="absolute inset-0"></span>
                            {{ $post->title }}
                        </h3>
                        <p class="mt-4 text-gray-700 line-clamp-3 text-sm/6">
                            {{ $post->excerpt ?? Str::limit($post->content, 120) }}
                        </p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</div>
