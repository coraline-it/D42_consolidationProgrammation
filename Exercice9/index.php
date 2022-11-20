<style>
    <?php include '../style.css'; ?>
</style>
<?php

use Applications\MAMP\htdocs\D42\Exercice9\Livre\Livre;

require('Livre.php');

$instance = new Livre();

echo $instance->getId();

$instance->setTitle(" coucou");
echo $instance->getTitle();
