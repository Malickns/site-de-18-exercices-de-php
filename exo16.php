<?php
function calculerSinus($angle, $unite)
{
    /* Convertir l'angle en radians si nécessaire*/
    if ($unite == "degre") {
        $angle = deg2rad($angle);
    } elseif ($unite == "grade") {
        $angle = deg2rad($angle * 9 / 10);
    }

    /* Calculer le sinus*/
    $resultat = sin($angle);

    return $resultat;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /* Vérifier si l'angle est saisi et est un nombre*/
    if (isset($_POST["angle"]) && is_numeric($_POST["angle"])) {
        /* Récupérer la valeur de l'angle et l'unité depuis le formulaire*/
        $angle = $_POST["angle"];
        $unite = $_POST["unite"];

        /* Appeler la fonction pour calculer le sinus*/
        $resultat = calculerSinus($angle, $unite);

        /* Afficher le résultat*/
        echo "<div class='result'>Le sinus de $angle $unite est : $resultat</div>";
    } else {
        /* Afficher un message d'erreur si l'angle n'est pas saisi ou n'est pas un nombre*/
        echo "<div class='result'>Veuillez saisir un nombre pour l'angle.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du Sinus</title>
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

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-size: 1.2em;
            margin-right: 10px;
        }

        input, label {
            vertical-align: middle;
        }

        input[type="radio"] {
            margin: 0;
        }

        div {
            margin-top: 10px;
        }

        button {
            padding: 10px 20px;
            font-size: 1em;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            font-size: 1.2em;
            margin-top: 20px;
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

<!-- Formulaire pour saisir l'angle et choisir l'unité -->
<form method="post">
    <label for="angle">Angle :</label>
    <input type="text" name="angle" id="angle">

    <label for="unite">Unité :</label>
    <div>
        <label for="radian"><input type="radio" name="unite" id="radian" value="radian" checked> Radian</label>
        <label for="degre"><input type="radio" name="unite" id="degre" value="degre"> Degré</label>
        <label for="grade"><input type="radio" name="unite" id="grade" value="grade"> Grade</label>
    </div>

    <button type="submit">Calculer le Sinus</button>
</form>

<!-- Bouton de retour à la page d'accueil -->
<a href="index.html">
    <button class="return-button">Retour à la page d'accueil</button>
</a>
</body>
</html>
