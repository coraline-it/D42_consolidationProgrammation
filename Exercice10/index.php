<?php

use Applications\MAMP\htdocs\D42\Exercice9\Livre\Livre;

require('../Exercice9/Livre.php');

$myConnection = new PDO('mysql:host=localhost:8889;dbname=D42_bdd;charset=utf8',
    'root',
    'root'
);

//$log = fopen("c:\\\folder\\\log.txt","r");
//$content = fgets($log, 4096);
//fclose($log);

$allBooksQR = 'SELECT * FROM book';
$addBookQR = 'INSERT INTO book VALUES (null,"l\'art de déguster la croquette"," Raiky")';
$firstCo = $myConnection->prepare($allBooksQR);
$addBook = $myConnection->prepare($addBookQR);

$firstCo->execute();
$addBook->execute();
$books = $firstCo->fetchAll();

foreach ($books as $book) {
    ?>
    <p><?php echo $book['title'].' a été écrit par'.$book['author']; ?></p>
    <?php
}








