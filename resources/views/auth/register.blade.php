<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" x-data="registrationForm()">
        @csrf

        <!-- Matična številka -->
        <div class="mt-4">
            <x-input-label for="maticna_stevilka" :value="'Matična številka'" />
            <x-text-input id="maticna_stevilka" class="mt-1 block w-full" type="text" name="maticna_stevilka"
                x-model="maticna" @change.debounce.500ms="lookupUser" required autofocus />
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="'Name'" />
            <x-text-input id="name" class="mt-1 block w-full" type="text" name="name" x-model="name"
                required />
        </div>

        <!-- Surname -->
        <div class="mt-4">
            <x-input-label for="surname" :value="'Priimek'" />
            <x-text-input id="surname" class="mt-1 block w-full" type="text" name="surname" x-model="surname"
                required />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="'Email'" />
            <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" x-model="email"
                required />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="'Telefon'" />
            <x-text-input id="phone" class="mt-1 block w-full" type="text" name="phone" x-model="phone" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="mt-1 block w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="mt-1 block w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="mt-4 flex justify-end">
            <x-primary-button>
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        function registrationForm() {
            return {
                maticna: '',
                name: '',
                surname: '',
                email: '',
                phone: '',
                lookupUser() {
                    fetch('/api/lookup-user', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify({
                                maticna_stevilka: this.maticna
                            })
                        })
                        .then(res => {
                            if (!res.ok) throw new Error('Not found');
                            return res.json();
                        })
                        .then(data => {
                            this.name = data.name ?? '';
                            this.surname = data.surname ?? '';
                            this.email = data.email ?? '';
                            this.phone = data.phone ?? '';
                        })
                        .catch(() => {
                            this.name = '';
                            this.surname = '';
                            this.email = '';
                            this.phone = '';
                        });
                }
            }
        }
    </script>
</x-guest-layout>
