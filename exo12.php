<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<table>";
    foreach ($_POST as $cle => $val) {
        echo "<tr> <td> $cle :  </td> <td>" . htmlspecialchars(stripslashes($val)) . "</td></tr>";
    }
    echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Exercice 12</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
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
    <h1>Confirmation de vos coordonnées</h1>
<form method="post">
    <fieldset>
        <legend><b>Saisissez vos coordonnées</b></legend>
        <table>
            <tr>
                <td>Nom :</td>
                <td><input type="text" name="nom" /></td>
            </tr>
            <tr>
                <td>Prénom :</td>
                <td><input type="text" name="prenom" /></td>
            </tr>
            <tr>
                <td>Adresse :</td>
                <td><input type="text" name="adresse" /></td>
            </tr>
            <tr>
                <td>Ville :</td>
                <td><input type="text" name="ville" /></td>
            </tr>
            <tr>
                <td>Code postal :</td>
                <td><input type="text" name="code" maxlength="5" /></td>
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
