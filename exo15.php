<?php
/* Définition de la fonction qui transforme les chaînes du tableau */
function debutMajuscule(&$tab)
{
    foreach($tab as $ind => $val)
    {
        /* Transforme chaque élément du tableau avec la première lettre en majuscule et le reste en minuscules*/
        $tab[$ind] = ucfirst(strtolower($val));
    }
    return $tab;
}

/*Utilisation de la fonction */
$tabch = ["maLick NDIAYE", "BigIaM", "espoir De LOUGA"];
print_r(debutMajuscule($tabch));
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Transformation des chaînes de caractères</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 1.2em; /* Augmente la taille des caractères */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f8f8;
        }

        /* Styles pour le bouton de retour */
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
<!-- Bouton de retour à la page d'accueil -->
<a href="index.html">
    <button class="return-button">Retour à l'accueil</button>
</a>

</body>
</html>
