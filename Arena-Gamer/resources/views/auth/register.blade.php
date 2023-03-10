<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="nick" :value="__('nick')" />
            <x-text-input id="nick" class="block mt-1 w-full" type="text" name="nick" :value="old('nick')" required autofocus autocomplete="nick" />
            <x-input-error :messages="$errors->get('nick')" class="mt-2" />
        </div>

        <!-- Pais -->
        <div>
            <x-input-label for="país" :value="__('país')" />
            <x-text-input id="país" class="block mt-1 w-full" type="text" name="país" :value="old('país')" required autofocus autocomplete="país" />
            <x-input-error :messages="$errors->get('país')" class="mt-2" />
        </div>

        <!--fecha -->
        <div class="mt-4">
            <x-input-label for="fnacimiento" :value="__('Fecha de Nacimiento')" />
            <x-text-input id="fnacimiento" class="block mt-1 w-full" type="date" name="fnacimiento" :value="old('fnacimiento')" required autocomplete="fnacimiento" />
            <x-input-error :messages="$errors->get('fnacimiento')" class="mt-2" />
        </div>

        <!--juego -->
        <div>
            <x-input-label for="juego_favorito_id" :value="__('juego favorito')" />
            <select name="juego_favorito_id" class="block mt-1 w-full">
            @foreach($juegos as $juego)
            <option class="block mt-1 w-full" value="{{ $juego->id }}">{{ $juego->nombre }}</option>
            @endforeach
            <x-input-error :messages="$errors->get('juego_favorito_id')" class="mt-2" />
            </select>
        </div>


       
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />


            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>



            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
    </form>
</x-guest-layout>