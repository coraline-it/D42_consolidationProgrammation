<?php

/* ---------------------------------------------------------------------
    - Modifier le texte pour remplacer "moi" par votre prénom:
    'Bonjour, c'est moi.
     T'es le bien venu sur mon site.'
    - Afficher le texte dans une page HTML
--------------------------------------------------------------------- */

// On stock dans des variables les infos nécessaires à l'exercice
$msg = nl2br("Bonjour, c'est moi.\r T'es le bien venu sur mon site.");
$nom = "Raiky fluffy baby puppy";
$sToReplace = "moi";
?>

<!-- Affichage dans une page HTML-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="top">
<!--
     Si la chaîne de caractère de la variable $msg contient la valeur de la donnée stockée dans la variable $sToReplace,
     On affiche le résultat du remplacement de la valeur de $sToReplace par celle de la variable
     $nom, dans la string de la variable $msg.
-->
    <p>
        <?php if(str_contains($msg,$sToReplace)) {
            echo str_replace($sToReplace,$nom,$msg);
        }?>
    </p>
</div>
</body>
</html>

