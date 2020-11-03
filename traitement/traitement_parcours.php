<?php 
include_once('./traitement/connexion_bdd.php'); // Fichier PHP contenant la connexion à votre BDD

$parcours = $bdd->query('SELECT * FROM parcours');

?>	