 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuario</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<x-sidebar />
<body class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('fondoadmin/font-index.jpg') }}'); min-height: 100vh;">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center text-white mb-8">Editar Usuario</h1>

        <div class="flex justify-center">
            <form action="" method="POST" class="bg-white p-6 rounded-lg shadow-md w-11/12 md:w-1/2 lg:w-1/3">
                @csrf
                @method('PUT')

                <!-- Campo de Correo Electrónico -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}" required class="w-full p-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <!-- Campo de Contraseña -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Contraseña:</label>
                    <input type="password" id="password" name="password" class="w-full p-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <!-- Botón Guardar Cambios -->
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg">
                    Guardar Cambios
                </button>
                <a href="{{ route('users.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg ml-4">
                    Regresar
                </a>

                </div>
            </form>
        </div>
    </div>

</body>
</html>
