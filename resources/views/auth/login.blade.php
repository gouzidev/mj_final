

<x-guest-layout class=''>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="">
        @csrf

        <!-- Email Address -->
        <div class="">
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email"
                    class="block mt-1 w-full"
                    type="email" name="email"
                    :value="old('email')"
                    required autofocus
                    autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password"
                            class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-500 rounded-md focus:outline-none" href="{{ route('register') }}">
                    {{ __('not registred?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                <i class="fa-solid fa-right-from-bracket duration-150 mr-2"></i>  
                {{ __('Connecter') }}

            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
