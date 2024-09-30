<!DOCTYPE html>
<html lang="en">
<head>
    <x-sidebar />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<a href="{{ asset('fondoadmin/font-index.jpg') }}"></a>
<body class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('fondoadmin/font-index.jpg') }}'); min-height: 100vh;">

    <div class="container mx-auto p-6">
        <div class="flex items-center">
            <form action="{{ route('users.search') }}" method="GET" class="flex">
                <input type="text" name="query" placeholder="Buscar usuarios..." class="w-64 p-2 border border-gray-400 rounded-l-lg">
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-3 rounded-r-lg">
                    Buscar
                </button>
            </form>
        </div>
    </div>
         
        <h1 class="text-3xl font-bold text-center text-white -600 mb-8">Usuarios registrados del sistema</h1>
        
        <div class="flex justify-center">
            <table class="table-auto w-11/12 bg-white border border-gray-600 shadow-md rounded-lg">
                <thead>
                    <tr class="bg-green-500 text-white">
                        <th class="px-4 py-2 text-left">Nombre</th>
                        <th class="px-4 py-2 text-left">Correo</th>
                        <th class="px-4 py-2 text-left">Rol</th>
                        <th class="px-4 py-2 text-left">Gestionar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr class="bg-green-100 hover:bg-green-200">
                        <td class="border px-4 py-2">{{ $user->name }}</td>
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class="border px-4 py-2">#</td> <!-- Asegúrate de tener la relación 'role' definida en el modelo -->
                        <td class="border px-4 py-2">
                            <a href="#" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                                Gestionar
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>
