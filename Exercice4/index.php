<!-- Exercice 4

Calculer le solde bancaire si nous avons les
différentes opérations de dépôt et de retrait
suivantes :

- Dépôt : 122 143 45 28
- Retrait : 12 47 60 80

- Calculer le montant moyen des dépôts
- Calculer le montant moyen des retraits

-->

<?php

use Applications\MAMP\htdocs\D42\Exercice4\CompteBancaire\CompteBancaire;

require('CompteBancaire.php');

// Calculer le solde bancaire si nous avons
// les différentes opérations de dépôt et de retrait suivantes
// Dépôt: 122 143 45 26
// Retrait: 12 47 60 80

// Calculer le montant moyen des dépots

// Calculer le montant moyen des retraits

// On déclare les montants dans des tableaux
$depotCpte = [122,143,45,26,87];
$retraitCpte = [12,47,60,80];
$soldeBc = 0;

$compteBancaire = new CompteBancaire();

$compteBancaire->soldeBcCalc($depotCpte, $retraitCpte, $soldeBc);
$compteBancaire->depotMoy($depotCpte, $soldeBc);
$compteBancaire->retraitMoy($retraitCpte, $soldeBc);
