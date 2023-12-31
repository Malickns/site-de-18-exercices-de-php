<?php
$message = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['number'])) {
    $inputNumber = $_POST['number'];

    if (is_numeric($inputNumber)) {
        $x = (int)$inputNumber;
        $message = $x % 3 == 0 && $x % 5 == 0 ? "$x est multiple de 3 et de 5" : "$x n'est pas multiple de 3 et de 5";
    } else {
        $error = "Veuillez saisir un nombre valide.";
    }
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    $error = "Veuillez saisir un nombre.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification Multiples de 3 et 5</title>
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
            max-width: 400px;
            width: 100%;
        }

        fieldset {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input {
            width: calc(100% - 20px);
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

        pre {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
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
<h1>Verification des multiples de 3 et de 5 </h1>
<form method="post">
    <fieldset>
        <label for="number">Entrez un nombre :</label>
        <input type="text" name="number" id="number" placeholder="Saisissez un nombre" />
        <?php if (!empty($error)): ?>
            <span style="color: red;"><?php echo $error; ?></span>
        <?php endif; ?>
        <input type="submit" value="Vérifier" />
    </fieldset>
</form>

<pre>
    <?php echo $message; ?>
</pre>

<!-- Bouton de retour à la page d'accueil -->
<a href="index.html" class="return-button">Retour à l'accueil</a>

</body>
</html>
