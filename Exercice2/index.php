<!-- Exercice 2

Ecrire une page Php qui reprend l’exercice 1,
mais les valeurs des balises <p> et <img> sont
renseignées en Php

- Par exemple, le code PHP doit afficher le contenu
de l’attribut alt
- Le code Php doit afficher le contenu Hello World

-->

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Exercice <?php echo "2"; ?></title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div class="top">
    <h1>Hello World <?php echo "Bonjour bonjour"?></h1>
    <?php echo "<img class='whiteBlue' src='../Exercice1/img/AraLevon.jpg' "?> alt="<?php echo "Toujours la même image"?>" >
    <p>Coucou</p>
  </div>
</body>
</html>