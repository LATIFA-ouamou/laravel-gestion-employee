<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails de l'Employé</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .nav-gradient {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        }
        .card-gradient {
            background: linear-gradient(135deg, #B6CDE8 0%, #E2ECF7 100%);
        }
        .card-shadow {
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.2);
        }
        .hover-lift:hover {
            transform: translateY(-3px);
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        .detail-item {
            background: rgba(255, 255, 255, 0.7);
            border-radius: 12px;
            padding: 16px;
            margin-bottom: 16px;
            border-left: 4px solid #4f46e5;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">

    <!-- Navigation -->
    <nav class="nav-gradient text-white py-4 px-6 shadow-lg">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="bg-white p-2 rounded-lg">
                    <i class="fas fa-users text-indigo-600 text-xl"></i>
                </div>
                <h1 class="text-xl font-bold">Gestion Employés</h1>
            </div>
            <div class="flex space-x-4">
                <a href="{{ route('Home') }}" 
                   class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg font-medium flex items-center space-x-2 transition hover-lift">
                    <i class="fas fa-list"></i>
                    <span>Liste des employés</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="flex items-center justify-center p-8 py-12">
        <div class="card-gradient rounded-3xl card-shadow p-8 w-full max-w-2xl border border-white/50">
            <div class="text-center mb-6">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white rounded-full shadow-md mb-4">
                    <i class="fas fa-user-circle text-indigo-600 text-3xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Détails de l'Employé</h2>
                <p class="text-gray-600">Informations complètes sur l'employé</p>
            </div>

            <div class="space-y-4 mt-6">
                <div class="detail-item">
                    <div class="flex items-center space-x-3 mb-2">
                        <i class="fas fa-tag text-indigo-500 text-lg"></i>
                        <h3 class="text-lg font-semibold text-gray-700">Nom</h3>
                    </div>
                    <p class="text-gray-800 text-xl font-medium pl-8">{{ $employee->nom }}</p>
                </div>

                <div class="detail-item">
                    <div class="flex items-center space-x-3 mb-2">
                        <i class="fas fa-user text-indigo-500 text-lg"></i>
                        <h3 class="text-lg font-semibold text-gray-700">Prénom</h3>
                    </div>
                    <p class="text-gray-800 text-xl font-medium pl-8">{{ $employee->prenom }}</p>
                </div>

                <div class="detail-item">
                    <div class="flex items-center space-x-3 mb-2">
                        <i class="fas fa-envelope text-indigo-500 text-lg"></i>
                        <h3 class="text-lg font-semibold text-gray-700">Email</h3>
                    </div>
                    <p class="text-gray-800 text-xl font-medium pl-8">{{ $employee->email }}</p>
                </div>

                <div class="detail-item">
                    <div class="flex items-center space-x-3 mb-2">
                        <i class="fas fa-briefcase text-indigo-500 text-lg"></i>
                        <h3 class="text-lg font-semibold text-gray-700">Poste</h3>
                    </div>
                    <p class="text-gray-800 text-xl font-medium pl-8">{{ $employee->poste }}</p>
                </div>
            </div>

            <div class="flex justify-center pt-6">
                <a href="{{ route('Home') }}" 
                   class="bg-gradient-to-r from-gray-400 to-gray-500 hover:from-gray-500 hover:to-gray-600 text-white font-semibold px-8 py-3 rounded-xl shadow-lg hover-lift flex items-center space-x-2">
                    <i class="fas fa-arrow-left"></i>
                    <span>Retour à la liste</span>
                </a>
            </div>
        </div>
    </div>

</body>
</html>