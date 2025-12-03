@extends('layouts.header')

@section('title', 'Materias')

@section('content')

    <body class="bg-gray-900">
        <div class="max-w-6xl w-full mx-auto mt-10 relative overflow-hidden z-10 bg-gray-800 p-8 rounded-lg shadow-md
                before:w-24 before:h-24 before:absolute before:bg-purple-600 before:rounded-full before:-z-10 
                before:blur-2xl before:-top-6 before:-left-6 after:w-32 after:h-32 after:absolute after:bg-sky-400 
                after:rounded-full after:-z-10 after:blur-xl after:top-24 after:-right-12">

            <h1 class="text-white text-center text-3xl font-semibold mb-6">Materias</h1>

            <div class="mb-4">
                <input type="text" id="search-name"
                    class="w-full p-2 bg-gray-700 border border-gray-600 rounded-md text-white focus:outline-none"
                    placeholder="Buscar por nombre...">
            </div>

            @if($materias->isEmpty())
                <p class="text-gray-300 text-center">No hay materias registradas.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-white">
                        <thead>
                            <tr class="bg-gray-700 text-center uppercase">
                                <th class="p-2">ID</th>
                                <th class="p-2">Número</th>
                                <th class="p-2">Nombre</th>
                                <th class="p-2">Logo</th>
                                <th class="p-2">Año</th>
                                <th class="p-2">División</th>
                                <th class="p-2">Acciones</th>
                            </tr>
                        </thead>

                        <tbody id="materias-body" class="bg-gray-900/40 text-center">
                            @foreach($materias as $materia)
                                <tr class="border-b border-gray-700 text-center">
                                    <td class="p-2">{{ $materia->id }}</td>
                                    <td class="p-2">{{ $materia->numero }}</td>
                                    <td class="p-2">{{ $materia->nombre }}</td>
                                    <td class="p-2">
                                        @if($materia->logo)
                                            <img src="{{ asset('storage/' . $materia->logo) }}" alt="{{ $materia->nombre }}"
                                                class="h-12 w-12 object-cover rounded mx-auto">
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="p-2">{{ $materia->anio }}</td>
                                    <td class="p-2">{{ $materia->division }}</td>
                                    <td class="p-3 flex justify-center gap-2">
                                        <!-- Botón Editar -->
                                        <a href="{{ route('materias.edit', $materia->id) }}"
                                            class="relative inline-flex items-center justify-center px-4 py-2 border border-yellow-400 text-yellow-400 rounded-md font-semibold hover:bg-yellow-400 hover:text-gray-900 transition duration-300">
                                            Editar
                                        </a>

                                        <!-- Botón Borrar -->
                                        <form action="{{ route('materias.destroy', $materia->id) }}" method="POST"
                                            onsubmit="return confirm('Seguro?')" class="inline-flex">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="relative inline-flex items-center justify-center px-4 py-2 border border-red-400 text-red-400 rounded-md font-semibold hover:bg-red-400 hover:text-gray-900 transition duration-300">
                                                Borrar
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            @endif

            <div class="flex justify-between items-center mt-6">

                <x-button>
                    <a href="{{ route('materias.create') }}">Nueva Materia</a>
                </x-button>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-red-400 hover:text-red-300">Cerrar sesión</button>
                </form>

            </div>
        </div>
    </body>
@endsection


@push('scripts')
    <script>
        $('#search-name').on('keyup change', function () {
            let name = $(this).val();
            $.get("{{ route('materias.index') }}", { filter_name: name }, function (data) {
                let html = $(data).find('#materias-body').html();
                $('#materias-body').html(html);
            });
        });
    </script>
@endpush