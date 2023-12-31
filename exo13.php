<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    /* Vérifie si le formulaire a été soumis*/
    if (!empty($_POST['prixht']) && !empty($_POST['tva'])) {
        $montantTVA = round($_POST['prixht'] * $_POST['tva'] / 100, 2);
        $prixTTC = round($_POST['prixht'] * (1 + $_POST['tva'] / 100), 2);

        echo "<p>Montant de la TVA : $montantTVA</p>";
        echo "<p>Prix TTC : $prixTTC</p>";
    } else {
        echo "<p><b>Le formulaire est incomplet !</b></p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Exercice 13</title>
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

        table {
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        input[type="text"],
        input[type="submit"] {
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 5px;
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
<form method="post">
    <fieldset>
        <legend><b>Saisissez le prix HT et le taux de TVA</b></legend>
        <table border="0">
            <tr>
                <td>Prix Hors Taxes :</td>
                <td><input type="text" name="prixht" value="<?= isset($_POST["prixht"]) ? $_POST["prixht"] : '' ?>" /></td>
            </tr>
            <tr>
                <td>Taux de TVA (en %) :</td>
                <td><input type="text" name="tva" value="<?= isset($_POST["tva"]) ? $_POST["tva"] : '' ?>" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="ENVOI" /></td>
            </tr>
        </table>
    </fieldset>
</form>

<!-- Bouton de retour à la page d'accueil -->
<a href="index.html" class="return-button">Retour à l'accueil</a>

</body>
</html>
