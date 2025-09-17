<!-- resources/views/kartings/create.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Karting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Nuevo Karting</h1>
        <a href="{{ route('kartings.index') }}" class="btn btn-secondary mb-3">Volver</a>

        <form action="{{ route('kartings.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nombre</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label>Velocidad</label>
                <input type="number" name="speed" class="form-control" value="{{ old('speed') }}">
                @error('speed')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label>Color</label>
                <input type="text" name="color" class="form-control" value="{{ old('color') }}">
                @error('color')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>

</html>