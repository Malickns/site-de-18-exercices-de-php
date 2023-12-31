<?php
/* Définition de la fonction pour afficher le tableau */
function team($tab)
{
    echo "<table border=\"1\" width=\"100%\"><tbody>";

    /*En-tête du tableau*/
    echo "<tr><th>Championnat</th><th>Club 1</th><th>Club 2</th><th>Club 3</th><th>Club 4</th><th>Club 5</th></tr>";

    /* Parcours du tableau */
    foreach ($tab as $championnat => $clubs) {
        echo "<tr>";
        echo "<td>$championnat</td>";
        echo "<td>{$clubs['Club1']}</td>";
        echo "<td>{$clubs['Club2']}</td>";
        echo "<td>{$clubs['Club3']}</td>";
        echo "<td>{$clubs['Club4']}</td>";
        echo "<td>{$clubs['Club5']}</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
}

// Définition du tableau associatif avec des championnats et des clubs
$clubs = [
    "Sénégal" => ["Club1" => "Diaraf", "Club2" => "As Douane", "Club3" => "Ndiambour", "Club4" => "Diamono", "Club5" => "Deukendo"],
    "Espagne" => ["Club1" => "Real Madrid", "Club2" => "FC Barcelona", "Club3" => "Atletico Madrid", "Club4" => "Valencia CF", "Club5" => "Sevilla FC"],
    "Angleterre" => ["Club1" => "Manchester United", "Club2" => "Liverpool FC", "Club3" => "Chelsea FC", "Club4" => "Arsenal FC", "Club5" => "Manchester City"],
];

// Appel de la fonction avec le tableau associatif
team($clubs);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau associatif</title>
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
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        /* Styles pour le bouton de retour */
        a {
            text-decoration: none;
        }

        button {
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

<!-- Bouton de retour à la page index -->
<a href="index.html">
    <button>Retour à la page d'accueil</button>
</a>

</body>
</html>
