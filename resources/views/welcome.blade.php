<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex flex-col justify-center items-center bg-gray-900">

    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-white mb-2">Bienvenido al Control de Materias</h1>
        <p class="text-gray-300">Administra tus materias de manera fácil y rápida.</p>
    </div>

    <x-form :action="route('login')" title="Iniciar Sesión">

        <x-form-input label="Email" name="email" type="email" />
        <x-form-input label="Contraseña" name="password" type="password" />

        <x-button>Entrar</x-button>

    </x-form>

    <x-button-link :href="route('register')"> Crear tu usuario </x-button-link>


</body>

</html>