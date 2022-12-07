<?php
// Exercice 3
//Calculer le nombre de lignes affichées, et le
//nombre d’images sur la dernière ligne si nous
//décidons d’afficher 3 images par ligne si nous
//avons, au total :

// - 3 images
// - 8 images
// - 144 images
// - 152 images

// Ecrire un programme qui va renvoyer le nombre de lignes pour 3images par lignes pour 3, 8, 144 et 152 images
// Retourner le nombre de lignes et retourner le nombre d'images sur la dernière ligne

// Déclaration des données des nombres d'images dans un tableau
$casS = [3,8,144,152];

$affImg = 3;

// Fonction d'affichage, comprennant le tableau du nombre d'images et le nombre d'images par ligne
function nbLignesnbImg($casS, $affImg) {
    foreach ($casS as $cas) {
        $nbLignes = intdiv($cas, $affImg);
        $nbImg    = $cas % $affImg;
        if ($nbImg === 0) {
            echo "Nombre de lignes pour $cas images par ligne: $nbLignes";
        } else {
            $nbLignesS = $nbLignes + 1;
            echo "Nombre de lignes pour $cas images par ligne: $nbLignesS ";
        }
        if ($nbImg === 0) {
            echo "<br> Nombre d'images sur la dernière ligne $affImg <br><br>";
        } else {
            echo "<br> Nombre d'images sur la dernière ligne $nbImg <br><br>";
        }
    }

}

nbLignesnbImg($casS, $affImg);