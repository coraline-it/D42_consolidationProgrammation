<style>
    <?php include '../style.css'; ?>
</style>

<?php

// Faire 4 pages
// 1 -> 3 cartes avec avatar, nom, prénom, trigramme, on click d'une des cards
// 2 -> détails info user
// 3 -> liste des cours DFS27A
// 4 -> affichage des infos du cours de la carte cliquée

// Connexion à la BDD
try
{
    $bdd = new PDO('mysql:host=localhost;port=8889;dbname=D42_bdd','root', 'root');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

// Bien commenter le code de tous les exos d'avant :)
// On peut créer des class objet mais il faut utiliser des tableaux
//$cards = [
//    $professor => $name,$surname,$avatar,$adress,$phone];
//    $cours[];

//    ];
$cardDetails = "";

// On prépare les requêtes pour les utilisateurs et les cours
$userDetailsQR = "SELECT * FROM tp_utilisateur";
$courseDetailsQR = "SELECT * FROM tp_cours";

$userDetails = $bdd->prepare($userDetailsQR);
$courseDetails = $bdd->prepare($courseDetailsQR);

$userDetails->execute();
$courseDetails->execute();

$users = $userDetails->fetchAll();
$courses = $courseDetails->fetchAll();
//var_dump($courses);




