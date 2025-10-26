<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Employé</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .nav-gradient {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        }
        .form-gradient {
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
                   class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg font-medium flex items-center space-x-2 transition">
                    <i class="fas fa-list"></i>
                    <span>Liste des employés</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="flex items-center justify-center p-8 py-12">
        <div class="form-gradient rounded-3xl card-shadow p-8 w-full max-w-2xl border border-white/50">
            <div class="text-center mb-2">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mb-4">
                    <i class="fas fa-user-edit text-indigo-600 text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Modifier un Employé</h2>
                <p class="text-gray-600">Mettez à jour les informations de l'employé</p>
            </div>

            <!-- ✅ Envoi l'ID de l'employé dans la route -->
            <form action="{{ route('Update', $emp->id) }}" method="POST" class="space-y-6 mt-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="nom" class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-tag mr-2 text-indigo-500"></i>Nom
                        </label>
                        <input type="text" id="nom" name="nom"
                               value="{{ $emp->nom }}"
                               class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 focus:outline-none transition bg-white/80">
                    </div>

                    <div>
                        <label for="prenom" class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-user mr-2 text-indigo-500"></i>Prénom
                        </label>
                        <input type="text" id="prenom" name="prenom"
                               value="{{ $emp->prenom }}"
                               class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 focus:outline-none transition bg-white/80">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-envelope mr-2 text-indigo-500"></i>Email
                    </label>
                    <input type="email" id="email" name="email"
                           value="{{ $emp->email }}"
                           class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 focus:outline-none transition bg-white/80">
                </div>

                <div>
                    <label for="poste" class="block text-sm font-semibold text-gray-700 mb-2">
                        <i class="fas fa-briefcase mr-2 text-indigo-500"></i>Poste
                    </label>
                    <input type="text" id="poste" name="poste"
                           value="{{ $emp->poste }}"
                           class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 focus:outline-none transition bg-white/80">
                </div>

                <div class="flex justify-between pt-6">
                    <button type="submit"
                            class="bg-[#2a5298] hover:from-indigo-700 hover:to-purple-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg hover-lift flex items-center space-x-2">
                        <i class="fas fa-save"></i>
                        <span>Mettre à jour</span>
                    </button>

                    <a href="{{ route('Home') }}"
                       class="bg-[#2a5298] hover:from-gray-500 hover:to-gray-600 text-white font-semibold px-8 py-3 rounded-xl shadow-lg hover-lift flex items-center space-x-2">
                        <i class="fas fa-arrow-left"></i>
                        <span>Annuler</span>
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>