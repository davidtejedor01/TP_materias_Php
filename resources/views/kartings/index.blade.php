<!-- resources/views/kartings/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<style>
    /* Gris claro */
    body {
        background: url('{{ asset("images/kart.jpg") }}') no-repeat center center fixed;
        background-size: cover;
    }
</style>

<body>
    <div class="container mt-5">
        <h1 class="text-white text-center fw-semibold" style="text-shadow: 2px 2px 4px #000000">Kartings</h1>
        <a href=" {{ route('kartings.create') }}" class="btn btn-primary mb-3">Nuevo Karting</a>

        <div class="mb-3 d-flex">
            <input type="text" id="search-input" class="form-control" placeholder="Buscar por nombre...">
        </div>

        @if($kartings->isEmpty())
            <p>No hay kartings registrados.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Velocidad</th>
                        <th>Color</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="kartings-body">
                    @foreach($kartings as $karting)
                        <tr>
                            <td>{{ $karting->id }}</td>
                            <td>{{ $karting->name }}</td>
                            <td>{{ $karting->speed }}</td>
                            <td>{{ $karting->color }}</td>
                            <td>
                                <a href="{{ route('kartings.edit', $karting->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('kartings.destroy', $karting->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Seguro?')">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>

<script>
    // Toma lo que escribis en el input con id 'search-input' y por cada tecla que apretes hace una peticion GET  a la ruta kartings.index
    $('#search-input').on('keyup', function () {
        let name = $(this).val();
        $.get("{{ route('kartings.index') }}", { filter_name: name }, function (data) { // data = HTML de toda la vista que devuelve Laravel.
            let html = $(data).find('#kartings-body').html(); // Busca de la vista devuelta solo la tabla. Extrae el contenido HTML de esa parte.
            $('#kartings-body').html(html); // Reemplaza el contenido actual de la tabla.
        });
    });
</script>

</html>