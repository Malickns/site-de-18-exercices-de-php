<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST['rayon'])) {
        $rayon = (float)$_POST['rayon'];
        $PI = 3.1416;

        $perimetre = 2 * $PI * $rayon;
        $surface = $PI * $rayon * $rayon;

        echo "Le périmètre du cercle est : " . number_format($perimetre, 2) . "</p>";
        echo "La surface du cercle est : " . number_format($surface, 2) . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du Périmètre et de la Surface d'un Cercle</title>
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

        p {
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

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <label for="rayon">Saisissez le rayon du cercle :</label>
    <input type="text" name="rayon" id="rayon" />
    <?php if (isset($_POST['rayon']) && !is_numeric($_POST['rayon'])) {?>
        <span style="color: red;">Veuillez saisir un rayon valide.</span>
    <?php } ?>
    <input type="submit" value="Calculer Périmètre et Surface" />
</form>
<a href="index.html">
    <button class="return-button">Retour à l'accueil</button>
</a>

</body>
</html>
