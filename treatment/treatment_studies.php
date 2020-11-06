<?php 
include_once('./treatment/login_bdd.php'); // Fichier PHP contenant la connexion à votre BDD

$parcours = $bdd->query('SELECT * FROM parcours ORDER BY annee_fin_parcours desc');

?>	