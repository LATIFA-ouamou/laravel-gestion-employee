{{-- 


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des employés</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 p-8">

    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Liste des employés</h1>

        <a href="{{ route('Add') }}" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 mb-4 inline-block">
            ➕ Ajouter un employé
        </a>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-gradient-to-r from-blue-600 to-blue-700">
                    <tr>
                        <th class="py-4 px-6 text-left text-white">ID</th>
                        <th class="py-4 px-6 text-left text-white">Nom</th>
                        <th class="py-4 px-6 text-left text-white">Prénom</th>
                        <th class="py-4 px-6 text-left text-white">Email</th>
                        <th class="py-4 px-6 text-left text-white">Poste</th>
                        <th class="py-4 px-6 text-left text-white">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($emp as $e)
                        <tr class="hover:bg-blue-50 transition">
                            <td class="py-4 px-6">{{ $e->id }}</td>
                            <td class="py-4 px-6">{{ $e->nom }}</td>
                            <td class="py-4 px-6">{{ $e->prenom }}</td>
                            <td class="py-4 px-6">{{ $e->email }}</td>
                            <td class="py-4 px-6">{{ $e->poste }}</td>
                            <td class="py-4 px-6 flex space-x-2">
                                <!-- Bouton Voir -->
                                <a href="{{ route('Detail', $e->id) }}" 
                                   class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-lg" 
                                   title="Voir">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <!-- Bouton Modifier   -->
                                <a href="{{ route('Edit', $e->id) }}" 
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white p-2 rounded-lg" 
                                   title="Modifier">
                                    <i class="fas fa-pen"></i>
                                </a>

                                <!-- Bouton Supprimer   -->
                                <form action="{{ route('Delete', $e->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cet employé ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-lg" 
                                            title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html> --}}







<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des employés</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .nav-gradient {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        }
        .card-shadow {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .table-header {
            background: linear-gradient(to right,  #475465);
        }
        .hover-lift:hover {
            transform: translateY(-2px);
            transition: all 0.2s ease;
        }
    </style>
</head>
<body class="bg-[#B6CDE8]">

    <!-- Navigation -->
    <nav class="nav-gradient text-white py-4 px-6">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="bg-white p-2 rounded-lg">
                    <i class="fas fa-users text-indigo-600 text-xl"></i>
                </div>
                <h1 class="text-xl font-bold">Gestion Employés</h1>
            </div>
            <a href="{{ route('Add') }}" class="bg-emerald-500 hover:bg-emerald-600 text-white px-5 py-2 rounded-lg font-medium flex items-center space-x-2 hover-lift">
                <i class="fas fa-plus"></i>
                <span>Ajouter un employé</span>
            </a>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800 mt-4">Liste des employés</h1>

        <div class="bg-white rounded-2xl card-shadow overflow-hidden">
            <table class="min-w-full">
                <thead>
                    <tr class="table-header">
                        <th class="py-4 px-6 text-left text-white font-semibold">ID</th>
                        <th class="py-4 px-6 text-left text-white font-semibold">Nom</th>
                        <th class="py-4 px-6 text-left text-white font-semibold">Prénom</th>
                        <th class="py-4 px-6 text-left text-white font-semibold">Email</th>
                        <th class="py-4 px-6 text-left text-white font-semibold">Poste</th>
                        <th class="py-4 px-6 text-left text-white font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($emp as $e)
                        <tr class="hover:bg-indigo-50 transition-all duration-200">
                            <td class="py-4 px-6 font-medium">{{ $e->id }}</td>
                            <td class="py-4 px-6">{{ $e->nom }}</td>
                            <td class="py-4 px-6"><strong>{{ $e->prenom }}</strong></td>
                            <td class="py-4 px-6 text-blue-600"><strong>{{ $e->email }}</strong></td>
                            <td class="py-4 px-6">
                                <span class="bg-indigo-100 text-blue-600">
                                  <strong>{{ $e->poste }}</strong>  
                                </span>
                            </td>
                            <td class="py-4 px-6 flex space-x-2">
                                <!-- Bouton Voir -->
                                <a href="{{ route('Detail', $e->id) }}" 
                                   class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-lg hover-lift" 
                                   title="Voir">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <!-- Bouton Modifier   -->
                                <a href="{{ route('Edit', $e->id) }}" 
                                   class="bg-amber-500 hover:bg-amber-600 text-white p-2 rounded-lg hover-lift" 
                                   title="Modifier">
                                    <i class="fas fa-pen"></i>
                                </a>

                                <!-- Bouton Supprimer   -->
                                <form action="{{ route('Delete', $e->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cet employé ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="bg-rose-500 hover:bg-rose-600 text-white p-2 rounded-lg hover-lift" 
                                            title="Supprimer">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>