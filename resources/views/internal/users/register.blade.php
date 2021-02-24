<x-app-layout>
    <x-slot name="head">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
        
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    </x-slot>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Registrar Usuario
        </h2>
    </x-slot>

    <div class="flex flex-col items-center min-h-full bg-gray-100 sm:justify-center sm:pt-0" style="box-shadow: inset 0 10px 15px -3px rgba(0, 0, 0, 0.15);">
    <div> 
  
    <a href="/">

    <img  src="{{asset('img/logo-fyg.png')}}"style="
    height: 70px; margin-top:2rem;" alt="" >
</a>
    </div>

    <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
    <x-jet-validation-errors class="mb-4" />

<form method="POST" action="{{ route('internal.users.store') }}">
    @csrf
    <div>
        <x-jet-label for="name" value="Nombre" />
        <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    </div>

    <div class="mt-4">
        <x-jet-label for="email" value="{{ __('Email') }}" />
        <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
    </div>

    <div class="mt-4">
        <x-jet-label for="password" value="Contraseña" />
        <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
    </div>

    <div class="mt-4">
        <x-jet-label for="password_confirmation" value="Confirmar Contraseña" />
        <x-jet-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <!-- <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
            Ya estás registrado?
        </a> -->

        <x-jet-button class="ml-4">
            Registrar Usuario
        </x-jet-button>
    </div>
</form>
    </div>
</div>

    
</x-app-layout>
