<?php
/* Choisissez un nombre de trois chiffres*/
$nombreInitial = 125; 

/*Traitement avec la boucle while*/
$nombreTireWhile = null;
$nombreCoupsWhile = 0;

while ($nombreTireWhile !== $nombreInitial) {
    $nombreTireWhile = rand(100, 999);
    $nombreCoupsWhile++;
}

echo "<pre>";
echo "Nombre choisi : $nombreInitial\n";
echo "Avec la boucle while, le nombre de coups nécessaires est : $nombreCoupsWhile";
echo "</pre>";

/* Traitement avec la boucle for*/
$nombreCoupsFor = 0;

for ($nombreTireFor = null; $nombreTireFor !== $nombreInitial; $nombreTireFor = rand(100, 999)) {
    $nombreCoupsFor++;
}

echo "<pre>";
echo "Nombre choisi : $nombreInitial\n";
echo "Avec la boucle for, le nombre de coups nécessaires est : $nombreCoupsFor";
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice - Nombre Aléatoire</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        pre {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }
        .return-button {
            padding: 10px 20px;
            font-size: 1em;
            background-color: #4285f4;
            color: white;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h1>Nombre alearoire </h1>
<!-- Bouton de retour à la page d'accueil -->
<a href="index.html" class="return-button">Retour à l'accueil</a>

</body>
</html>
