@extends('layouts.app')

@section('content')
    <div class="mx-auto mt-10 max-w-md rounded bg-white p-8 shadow">
        <h1 class="mb-6 text-2xl font-bold">Dokončaj registracijo</h1>

        <form method="POST" action="{{ route('registration.store') }}">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">

            <!-- Ime -->
            <div class="mb-4">
                <label for="name" class="mb-1 block font-medium">Ime</label>
                <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}"
                    class="w-full rounded border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring"
                    required>
            </div>

            <!-- Priimek -->
            <div class="mb-4">
                <label for="surname" class="mb-1 block font-medium">Priimek</label>
                <input id="surname" name="surname" type="text" value="{{ old('surname', $user->surname ?? '') }}"
                    class="w-full rounded border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring"
                    required>
            </div>

            <!-- Matična številka -->
            <div class="mb-4">
                <label for="maticna_stevilka" class="mb-1 block font-medium">Matična številka</label>
                <input id="maticna_stevilka" name="maticna_stevilka" type="text"
                    value="{{ old('maticna_stevilka', $user->maticna_stevilka) }}"
                    class="w-full cursor-not-allowed rounded border border-gray-300 bg-gray-100 px-3 py-2" readonly>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="mb-1 block font-medium">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}"
                    class="w-full rounded border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring"
                    required>
            </div>

            <!-- Telefon -->
            <div class="mb-4">
                <label for="phone" class="mb-1 block font-medium">Telefon</label>
                <input id="phone" name="phone" type="text" value="{{ old('phone', $user->phone ?? '') }}"
                    class="w-full rounded border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <!-- Geslo -->
            <div class="mb-4">
                <label for="password" class="mb-1 block font-medium">Geslo</label>
                <input id="password" name="password" type="password"
                    class="w-full rounded border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring"
                    required>
            </div>

            <!-- Potrditev gesla -->
            <div class="mb-6">
                <label for="password_confirmation" class="mb-1 block font-medium">Ponovi geslo</label>
                <input id="password_confirmation" name="password_confirmation" type="password"
                    class="w-full rounded border border-gray-300 px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring"
                    required>
            </div>

            <!-- Submit gumb -->
            <button type="submit"
                class="w-full rounded bg-green-600 px-4 py-2 font-semibold text-white hover:bg-green-700">
                Registriraj se
            </button>
        </form>
    </div>
@endsection
