<?php

require_once "./chat.php";


//$chat = array($chat1, $chat2);

$chat1->prenom = "toto";
$chat1->age = "2";
$chat1->couleur = "brun";
$chat1->sexe = "male";
$chat1->race = "siamois";

$chat2->prenom = "mario";
$chat2->age = "3";
$chat2->couleur = "noir";
$chat2->sexe = "male";
$chat2->race = "siamois";

$chat3->prenom = "toupi";
$chat3->age = "1";
$chat3->couleur = "gris";
$chat3->sexe = "femelle";
$chat3->race = "siamois";

echo "<pre>";
var_dump($chat1,$chat2,$chat3);
echo "<pre>";

/*echo "<pre>";
var_dump($chat->recupTout());
echo "</pre>";*/

?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercice 4</title>
    <meta charset="utf-8">
</head>
<body>

<div class="container">

    <table class="table">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Âge</th>
            <th>Couleur</th>
            <th>Sexe</th>
            <th>Race</th>
        </tr>
        </thead>
    </table>
</div>
</body>
</html>


