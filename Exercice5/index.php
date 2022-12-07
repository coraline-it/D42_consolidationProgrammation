<!-- Exercice 5

Ecrire une variable qui a pour valeur :

"Bonjour, c’est moi.
T’es le bien venu sur mon site."

Afficher le texte dans une page HTML

-->

<?php
    $msg = nl2br("Bonjour, c'est moi.\r T'es le bien venu sur mon site.");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Exercice 5</title>
</head>
<body>
  <p> <?php echo "Hello " . $msg ?> </p>
</body>
</html>
