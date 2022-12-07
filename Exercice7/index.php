<?php

// 4 constantes

// Créer 4 personnes et selon rôle,
//Faire liste déroulante, choisir un nom
// Chaque nom aura un role attribué
// Afficher la page modifiée selon choix de nom

// On déclare les rôles
$role = [
    'admin' => 'vous êtes l\'administrateur du site',
    'gestionnaire' => 'vous êtes gestionnaire du site',
    'membre' => 'vous êtes membre du site',
    'autre' => 'bienvenue invité'
        ];

$nom = ['Claudie', 'Sam', 'Logidell'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Exercice 7</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="top">
    <div>
      <p>Veuillez vous identifier</p>
    </div>
  <!-- Création d'un formulaire en méthod POST pour que l'utilisateur choisisse son nom dans la liste
   les value="" correspondent à chacune des entrées de $role -->
    <form action="" method="post">
        <div>
            <select name="Nom">
                <option value="">Qui êtes-vous?</option>
                <option value="Claudie">Claudie</option>
                <option value="Sam">Sam</option>
                <option value="Logidell">Logidell</option>
            </select>
        </div>
    <input type="submit" name="submit" value="Ok">
    </form>
    <?php
    // Selon le choix de l'utilisateur il lui est indiqué son rôle au submit du formulaire
    if(isset($_POST['submit'])) {
          switch ($_POST['Nom']) {
            case '':
              echo $_POST['Nom'].', '.$role['autre'];
              break;
            case 'Sam':
              echo $_POST['Nom'].', '.$role['membre'];
              break;
            case 'Logidell':
                echo $_POST['Nom'].', '.$role['admin'];
                break;
            case 'Claudie':
                echo $_POST['Nom'].', '.$role['gestionnaire'];
        }
    }
    ?>
</div>
</body>
</html>