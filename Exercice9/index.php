<style>
    <?php include '../style.css'; ?>
</style>
<?php

// Exercice 9
//Créer une classe Livre qui contient :
//
// - Int id
// - String titre
//
//Créer une fonction qui instancie la classe Livre

use Applications\MAMP\htdocs\D42\Exercice9\Livre\Livre;

require('Livre.php');

$instance = new Livre();

echo $instance->getId();

$instance->setTitle(" coucou");
echo $instance->getTitle();
