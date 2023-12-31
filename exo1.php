<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables PHP</title>
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

        h2 {
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
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

<h2>Variables PHP valides :</h2>
<ul>
    <li>$mavar (valide)</li>
    <li>$var5 (valide)</li>
    <li>$_mavar (valide)</li>
    <li>$_5var (valide)</li>
    <li>$__élément1 (valide)</li>
</ul>

<h2>Variable PHP invalide :</h2>
<ul>
    <li><strong>$hotel4*</strong> (car le caractère * n'est pas autorisé dans un nom de variable)</li>
    <li><strong>mavar</strong> (car ne commence pas par le symbole $)</li>
</ul>

<!-- Bouton de retour à la page d'accueil -->
<a href="index.html" class="return-button">Retour à l'accueil</a>

</body>
</html>
