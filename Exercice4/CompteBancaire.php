<?php

namespace Applications\MAMP\htdocs\D42\Exercice4\CompteBancaire ;

class CompteBancaire
{
    function __construct() {

    }

    public function soldeBcCalc($depotCpte, $retraitCpte, $soldeBc) {
        $totalDepots =  array_sum($depotCpte);
        $totalRetrait = array_sum($retraitCpte);
        $soldeBcCalcule = $soldeBc + $totalDepots - $totalRetrait;
        echo "Le solde bancaire en partant de $soldeBc est de $soldeBcCalcule avec un total des dépôts de $totalDepots et un total des retraits de $totalRetrait. <br>";
    }

    public function depotMoy($depotCpte, $soldeBc) {
        $moyDepot = $soldeBc + (array_sum($depotCpte)/count($depotCpte));
        echo "La somme moyenne des dépots est de $moyDepot. <br>";
    }

    public function retraitMoy($retraitCpte, $soldeBc) {
        $moyRetrait = $soldeBc + (array_sum($retraitCpte)/count($retraitCpte));
        echo "La somme moyenne des retraits est de $moyRetrait. <br>";
    }
}