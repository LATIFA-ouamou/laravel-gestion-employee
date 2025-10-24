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
                                <a href="{{ route('Detail', $e->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-lg" title="Voir">
                                    <i class="fas fa-eye"></i>
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
