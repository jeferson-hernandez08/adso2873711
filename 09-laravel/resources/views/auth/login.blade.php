{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.app')   {{-- layouts nombre de carpeta y luego llama al app.blade.php --}}
@section('title', 'Login')
@section('content')
    <main class="bg-[url(images/fondoPetsApp.png)] bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#0006] w-96 text-white p-10 rounded-lg flex flex-col justify-center items-center">
            <h1 class="text-4x1 flex gap-2 items-center pb-2 border-b-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>
                Login
            </h1>
            @if (count($errors->all()) > 0)
                <div class="flex flex-col gap-1 my-4">
                    @foreach ($errors->all() as $msg)
                        <div class="badge badge-error text-xs">
                            {{ $msg }}
                        </div>
                    @endforeach
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-6">
                @csrf
                <div class="mt-4">
                    <label class="mt-4" for="">Email:</label>
                    <input type="text" name="email" placeholder="jonhw@gmail.com" class="input bg-[transparent] border-white" />
                </div>
                <div>
                    <label class="mt-4" for="">Password:</label>
                    <input type="password" name="password" placeholder="secret" class="input bg-[transparent] border-white" />  
                </div>
                <div>
                    <button class="btn btn-outline w-full">
                        Login
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>

                    </button>
                     @if (Route::has('password.request'))
                        <a class="pb-1 border-b-2 mt-6 inline-block text-sm text-gray-200" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </main>

@endsection
