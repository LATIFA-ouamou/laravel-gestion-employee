<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails de l'Employé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

<div class="container mt-5">
    <h2 class="mb-4 text-center text-primary">Détails de l'Employé</h2>

    <div class="card shadow p-4" style="max-width: 600px; margin: auto;">
        <div class="card-body">
            <h4><strong>Nom :</strong> {{ $employee->nom }}</h4>
            <p><strong>Prénom :</strong> {{ $employee->prenom }}</p>
            <p><strong>Email :</strong> {{ $employee->email }}</p>
            <p><strong>Poste :</strong> {{ $employee->poste }}</p>

            <a href="{{ route('Home') }}" class="btn btn-secondary mt-3">↩ Retour</a>
        </div>
    </div>
</div>

</body>
</html>
