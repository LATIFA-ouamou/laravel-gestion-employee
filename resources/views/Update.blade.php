<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Employé</title>
      @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-lg">
        <h2 class="text-2xl font-bold text-center text-indigo-600 mb-6">Modifier un Employé</h2>

     
            <form action="{{ route('Update') }}" method="POST" class="space-y-4">
             @csrf
    @method('PUT')

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                <input type="text" id="name" name="name"
                       value="{{ $emp->nom }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
            </div>
            <div>
                <label for="prenom" class="block text-sm font-medium text-gray-700 mb-1">Prenom</label>
                <input type="text" id="prenom" name="position"
                       value=" Ouamou"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email"
                       value="{{ $emp->email }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
            </div>

            <div>
                <label for="position" class="block text-sm font-medium text-gray-700 mb-1">Poste</label>
                <input type="text" id="position" name="position"
                       value="{{ $emp->poste }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
            </div>


            

            <div class="flex justify-between pt-4">
                <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-lg shadow">
                    💾 Mettre à jour
                </button>
                <a href="{{ route('Home') }}"
                   class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold px-6 py-2 rounded-lg shadow">
                    ↩ Annuler
                </a>
            </div>
        </form>
    </div>

</body>
</html>
