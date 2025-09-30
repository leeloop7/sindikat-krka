@extends('layouts.app')

@section('content')
    <div class="mx-auto mt-10 max-w-md rounded bg-white p-6 shadow">
        <h1 class="mb-4 text-2xl font-bold">Registracija</h1>

        <form method="POST" action="{{ route('registration.check') }}">
            @csrf

            <div class="mb-4">
                <label for="maticna_stevilka" class="block text-sm font-medium text-gray-700">Matična številka</label>
                <input type="text" name="maticna_stevilka" id="maticna_stevilka"
                    class="mt-1 block w-full rounded border px-3 py-2" required autofocus>
            </div>

            <button type="submit" class="rounded bg-blue-600 px-4 py-2 text-white">
                Naprej
            </button>
        </form>
    </div>
@endsection
