@extends('layouts.header')

@section('title', 'Registro')

@section('content')

    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-900 px-4">

        <x-form :action="route('register')" title="Registrarse">

            <x-form-input label="Nombre" name="name" type="text" />
            <x-form-input label="Email" name="email" type="email" />
            <x-form-input label="Contraseña" name="password" type="password" />
            <x-form-input label="Confirmar Contraseña" name="password_confirmation" type="password" />

            <x-button>Registrarse</x-button>

        </x-form>

        <x-button-link :href="route('login')">
            Volver al Login
        </x-button-link>

    </div>

@endsection