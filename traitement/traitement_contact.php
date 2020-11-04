<?php 
include_once('../traitement/connexion_bdd.php'); // Fichier PHP contenant la connexion à votre BDD

$contacts = $bdd->query('SELECT * FROM contact');

?>	