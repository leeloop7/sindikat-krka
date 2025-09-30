<x-filament::page>
    <div class="space-y-4">
        @foreach ($this->events as $event)
            @php
                $userResponse = $event->users->find(auth()->id())?->pivot->response;
                $responseLabels = [
                    'going' => 'Grem',
                    'not_going' => 'Ne grem',
                    'maybe' => 'Mogoče',
                ];
                $responseColors = [
                    'going' => 'bg-green-600 text-white',
                    'not_going' => 'bg-red-600 text-white',
                    'maybe' => 'bg-yellow-500 text-black',
                    'none' => 'bg-gray-300 text-gray-800',
                ];
                $responseKey = $userResponse ?? 'none';
            @endphp

            <div x-data="{ open: false }" class="rounded-lg border shadow-sm">
                {{-- Header --}}
                <button @click="open = !open"
                    class="flex w-full flex-col rounded-t-lg bg-gray-50 px-4 py-3 text-left hover:bg-gray-100 sm:flex-row sm:items-center sm:justify-between">
                    <div class="font-semibold text-gray-900">
                        {{ $event->title }}
                    </div>
                    <div class="mt-2 flex flex-wrap items-center gap-3 text-sm sm:mt-0">
                        <span class="text-gray-500">
                            {{ \Carbon\Carbon::parse($event->event_date)->format('d.m.Y') }}
                        </span>

                        <x-filament::badge
                            color="{{ [
                                'going' => 'success',
                                'not_going' => 'danger',
                                'maybe' => 'warning',
                                'none' => 'gray',
                            ][$responseKey] }}">
                            {{ $responseLabels[$userResponse] ?? 'Ni še odgovora' }}
                        </x-filament::badge>
                    </div>
                </button>

                {{-- Content --}}
                <div x-show="open" x-collapse class="border-t bg-white px-4 py-4">
                    <div class="prose mb-2 max-w-none text-sm text-gray-800">
                        {!! $event->description !!}
                    </div>

                    <p class="mb-4 text-sm text-gray-500">
                        Datum: {{ \Carbon\Carbon::parse($event->event_date)->format('d.m.Y') }}
                    </p>

                    <div class="flex flex-wrap gap-3">
                        @foreach (['going' => 'Grem', 'not_going' => 'Ne grem'] as $value => $label)
                            <form method="POST" action="{{ route('events.respond', ['event' => $event->id]) }}">
                                @csrf
                                <input type="hidden" name="response" value="{{ $value }}">
                                <x-filament::button size="sm"
                                    color="{{ $value === 'going' ? 'success' : 'danger' }}" :outlined="$userResponse !== $value"
                                    type="submit">
                                    {{ $label }}
                                </x-filament::button>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-filament::page>
