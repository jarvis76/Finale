<?php
include "./classes/logs.php";
$marque = $_REQUEST['marque'] ?? "";
$modele = $_REQUEST['modele'] ?? "";
$annee = $_REQUEST['annee'] ?? "";
$couleur = $_REQUEST['couleur'] ?? "";

logs::logWrite("Bonjour votre véhicule $marque $modele de couleur $couleur de $annee");
