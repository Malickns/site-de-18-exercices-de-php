<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Exercice chapitre 6 n° 8</title>
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

        form {
            text-align: center;
            margin: 20px;
        }

        fieldset {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        legend {
            font-weight: bold;
            color: #4285f4;
        }

        /* Styles pour les boutons et liens */
        .action-button, a {
            padding: 10px 20px;
            font-size: 1em;
            background-color: #4285f4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin: 5px;
            display: inline-block;
        }

        .action-button:hover, a:hover {
            background-color: #2c65f0;
        }

        /* Styles pour le bouton de retour */
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

<form action="vente.html" method="post">
    <fieldset>
        <legend><b>Faites votre choix</b></legend>
        <button class="action-button" type="submit" name="choix" value="Vendre">Vendre</button>
    </fieldset>
</form>

<form action="achat.html" method="post">
    <fieldset>
        <legend><b>Faites votre choix</b></legend>
        <button class="action-button" type="submit" name="choix" value="Acheter">Acheter</button>
    </fieldset>
</form>

<form action="location.html" method="post">
    <fieldset>
        <legend><b>Faites votre choix</b></legend>
        <button class="action-button" type="submit" name="choix" value="Louer">Louer</button>
    </fieldset>
</form>

<!-- Bouton de retour à la page d'accueil -->
<a href="index.html" class="return-button">Retour à l'accueil</a>

</body>
</html>
