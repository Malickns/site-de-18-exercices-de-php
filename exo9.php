<?php
$tableau = [
    "etudiant 1" => ["prenom" => "Adama", "ville" => "Ziguinchor", "age" => 22],
    "etudiant 2" => ["prenom" => "Astou", "ville" => "Dakar", "age" => 20],
    "etudiant 3" => ["prenom" => "Alpha", "ville" => "Thies", "age" => 18]
];

echo "<pre>";
print_r($tableau);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcours d'un tableau</title>
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
        }

        a {
            text-decoration: none;
            margin-top: 20px;
        }

        .return-button {
            padding: 10px 20px;
            font-size: 1em;
            background-color: #4285f4;
            color: white;
            border-radius: 5px;
        }

        .return-button:hover {
            background-color: #2c65f0;
        }
    </style>
</head>
<body>
<!-- Bouton de retour à la page d'accueil -->
<a href="index.html">
    <button class="return-button">Retour à l'accueil</button>
</a>

</body>
</html>
