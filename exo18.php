<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage de nombres</title>
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

        .line {
            display: inline-block;
            margin-bottom: 10px; /* Ajout d'un espace entre les lignes */
            animation: increaseSize 0.5s ease-in-out;
        }

        @keyframes increaseSize {
            from {
                font-size: 2em;
            }
            to {
                font-size: 3em; /* Taille maximale souhaitée */
            }
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

    <div class="pattern-container">
        <?php
        //*Boucle externe pour les lignes*/
        for($i = 1; $i <= 10; $i++) {
            /*Boucle interne pour les chiffres dans chaque ligne*/
            for($m = 1; $m <= $i; $m++) {
                /*Affiche le chiffre correspondant à la ligne actuelle*/
                echo '<span class="line">' . $i . '</span>';
            }
            /*Ajoute un saut de ligne après chaque ligne complétée*/
            echo '<br />';
        }
        ?>
    </div>

    <!-- Bouton de retour à la page index -->
    <a href="index.html">
        <button>Retour à la page d'accueil</button>
    </a>

</body>
</html>
