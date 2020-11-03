<?php 
include_once('./traitement/connexion_bdd.php'); // Fichier PHP contenant la connexion à votre BDD

$projets = $bdd->query('SELECT * FROM projet');

?>	