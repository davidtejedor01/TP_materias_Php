@extends('layouts.header')

@section('title', 'Editar Materia')

@section('content')

    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-900 px-4">

        <x-form :action="route('materias.update', $materia->id)" title="Editar Materia">
            @method('PUT')

            <x-form-input label="Número" name="numero" type="number" :value="$materia->numero" />
            <x-form-input label="Nombre" name="nombre" type="text" :value="$materia->nombre" />
            <x-form-file label="Logo" name="logo" accept="image/*" :current="$materia->logo" />
            <x-form-input label="Año" name="anio" type="number" :value="$materia->anio" />
            <x-form-input label="División" name="division" type="number" :value="$materia->division" />

            <x-button>Actualizar</x-button>

        </x-form>

        <x-button-link :href="route('materias.index')">
            Volver a Materias
        </x-button-link>

    </div>

@endsection