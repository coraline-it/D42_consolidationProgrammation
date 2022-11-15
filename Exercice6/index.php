<?php

$msg = nl2br("Bonjour, c'est moi.\r T'es le bien venu sur mon site.");
$nom = "Coraline";

if(str_contains($msg,'moi')) {
    echo str_replace("moi",$nom,$msg);
}
