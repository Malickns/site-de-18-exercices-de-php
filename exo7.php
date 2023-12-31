<?php
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    /* Vérifie si le formulaire a été soumis */
    if (!empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];

        /* Vérifie si la valeur est un nombre */
        if (is_numeric($nombre)) {
            $nombre = (int)$nombre;
            $somme = 0;

            for ($i = 1; $i <= sqrt($nombre); $i++) {
                if ($nombre % $i == 0) {
                    $somme += $i;
                    if ($i != $nombre / $i) {
                        $somme += $nombre / $i;
                    }
                }
            }

            if ($somme - $nombre == $nombre) {
                echo "<p>$nombre est un nombre parfait.</p>";
            } else {
                echo "<p>$nombre n'est pas un nombre parfait.</p>";
            }
        } else {
            $error_message = "<p><b>Veuillez saisir un nombre valide !</b></p>";
        }
    } 
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres Parfaits</title>
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

<form method="post">
    <label for="nombre">Saisissez un nombre :</label>
    <input type="text" name="nombre" id="nombre" />
    <?php if (isset($_POST['nombre']) && !is_numeric($_POST['nombre'])) {?>
        <span style="color: red;">Veuillez saisir un nombre valide.</span>
    <?php } ?>
    <input type="submit" value="Vérifier si c'est un nombre parfait" />
</form>

<?php echo $error_message; ?>

<!-- Bouton de retour à la page d'accueil -->
<a href="index.html">
    <button class="return-button">Retour à l'accueil</button>
</a>

</body>
</html>
