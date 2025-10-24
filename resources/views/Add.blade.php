 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>ADD EMP</h1>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center">
  <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6">Ajouter un Employé</h2>

    <form action="{{route('Add')}}" method="POST" class="space-y-4">
      @csrf

      <!-- Champ Nom -->
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
        <input type="text" id="name" name="name" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-indigo-500 focus:border-indigo-500" required>
      </div>

      <!-- Champ Prénom -->
      <div>
        <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
        <input type="text" id="prenom" name="prenom" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-indigo-500 focus:border-indigo-500" required>
      </div>

      <!-- Champ Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-indigo-500 focus:border-indigo-500" required>
      </div>

      
      <div>
        <label for="poste" class="block text-sm font-medium text-gray-700">Poste</label>
        <input type="text" id="poste" name="poste" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-indigo-500 focus:border-indigo-500" required>
      </div>

      <!-- Bouton -->
      <div class="text-center">
        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">Enregistrer</button>
        <a href="{{route('Home')}}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition" >↩ Retour à la liste</a>
  </div>
      </div>
    </form>
   
</div>

</body>
</html> 
