<?php
function ensembleDiviseur($n) {
    $diviseurs = [];
    $i = 1;

    while ($i <= sqrt($n)) {
        if ($n % $i == 0) {
            $diviseurs[] = $i;
        }
        $i++;
    }

    for ($j = count($diviseurs); $j >= 1; $j--) {
        $diviseurs[] = $n / $diviseurs[$j - 1];
    }

    return $diviseurs;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST['nombre'])) {
        $nombre = (int)$_POST['nombre'];
        $diviseurs = ensembleDiviseur($nombre);

        echo "La liste des diviseurs de $nombre est : ";
        echo "<ul>";
        foreach ($diviseurs as $diviseur) {
            echo "<li>$diviseur</li>";
        }
        echo "</ul>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des diviseurs d'un nombre</title>
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

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
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

<form method="post">
    <input type="text" name="nombre" id="nombre" placeholder="Veuillez saisir un nombre"/>
    <?php if (isset($_POST['nombre']) && !is_numeric($_POST['nombre'])) {?>
        <span style="color: red;">Veuillez saisir un nombre valide.</span>
    <?php } ?>
    <input type="submit" value="Lister les diviseurs" />
</form>

<!-- Bouton de retour à la page d'accueil -->
<a href="index.html">
    <button class="return-button">Retour à l'accueil</button>
</a>

</body>
</html>
