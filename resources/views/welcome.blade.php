<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karting App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container text-center mt-5">
        <h1 class="mb-3">🏎️ Bienvenido a la Karting App</h1>
        <p class="lead mb-4">Administra tus registros de karting de manera fácil y rápida.</p>
        <a href="{{ route('kartings.index') }}" class="btn btn-primary btn-lg">Ver Kartings</a>
    </div>
</body>

</html>