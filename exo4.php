<?php
function ppcm($a, $b) {
    /*Vérifier que ni $a ni $b ne sont égaux à zéro*/
    if ($a == 0 || $b == 0) {
        return 0; /* Si l'un des deux est zéro, le PPCM est zéro*/
    }

    $c = $a;
    $d = $b;

    while ($a != $b) {
        if ($a > $b) {
            $b += $d;
        } else {
            $a += $c;
        }
    }

    return $a;
}

$errorMessages = [];

if ($_SERVER["REQUEST_METHOD"] === "POST" && count($_POST) == 2) {
    $nombre1 = isset($_POST['nombre1']) ? $_POST['nombre1'] : null;
    $nombre2 = isset($_POST['nombre2']) ? $_POST['nombre2'] : null;

    /* Vérification des champs*/
    if ($nombre1 === null || $nombre2 === null || !is_numeric($nombre1) || !is_numeric($nombre2)) {
        $errorMessages[] = "Veuillez remplir correctement tous les champs avec des nombres.";
    }

    /*Si pas d'erreur, on effectue le calcul du PPCM*/
    if (empty($errorMessages)) {
        /*Calcul du PPCM*/
        $ppcm_result = ppcm($nombre1, $nombre2);

        echo "<p>Le PPCM de $nombre1 et $nombre2 est : $ppcm_result</p>";
    }
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errorMessages[] = "Veuillez remplir correctement tous les champs avec des nombres.";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Calcul du PPCM</title>
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
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: none;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4285f4;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2c65f0;
        }

        p {
            margin-top: 20px;
            color: red; 
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
    <h1>Calcul de PPMC de deux nombres </h1>
<form method="post">
    <fieldset>
        <legend><b>Entrez deux nombres</b></legend>
        <label for="nombre1">Nombre 1 :</label>
        <input type="text" name="nombre1" id="nombre1" placeholder="Entrez un nombre" />
        <label for="nombre2">Nombre 2 :</label>
        <input type="text" name="nombre2" id="nombre2" placeholder="Entrez un autre nombre" />
        <input type="submit" value="Calculer PPCM" />
    </fieldset>
</form>

<?php
/*Affichage des messages d'erreur */
foreach ($errorMessages as $errorMessage) {
    echo "$errorMessage";
}
?>
<a href="index.html">
    <button class="return-button">Retour à l'accueil</button>
</a>
</body>
</html>
