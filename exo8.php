<?php
$tab = [
    "Femme" => ["Seynabou", "Dakar", 22],
    "Homme" => ["Papa", "Louga", 23],
    "Fils" => ["Boubacar", "Mbour", 29]
];

echo "<pre>";
print_r($tab);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage Tableau Associatif Multidimensionnel</title>
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
