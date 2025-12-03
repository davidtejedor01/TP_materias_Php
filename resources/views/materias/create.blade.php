@extends('layouts.header')

@section('title', 'Nueva Materia')

@section('content')

    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-900 px-4">

        <x-form :action="route('materias.store')" title="Nueva Materia">

            <x-form-input label=" Número" name="numero" type="number" />
            <x-form-input label="Nombre" name="nombre" type="text" />
            <x-form-file label="Logo" name="logo" accept="image/*" />
            <x-form-input label="Año" name="anio" type="number" />
            <x-form-input label="División" name="division" type="number" />

            <x-button>Guardar</x-button>

        </x-form>

        <x-button-link :href="route('materias.index')">
            Volver a Materias
        </x-button-link>

    </div>

@endsection