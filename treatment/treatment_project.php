<?php 
include_once('./treatment/login_bdd.php'); // Fichier PHP contenant la connexion à votre BDD

$projets = $bdd->query('SELECT * FROM projet');


if(isset($_GET['id']) AND !empty($_GET['id'])) 
{
	//Récupération de la question sur laquelle l'utilisateur aura cliqué
	$get_id = htmlspecialchars($_GET['id']);
	$projet = $bdd->prepare('SELECT * FROM projet  WHERE id_projet = ?');
	$projet->execute(array($get_id));
	$projet = $projet->fetch();
	// Récupération des réponses correspondant à la question
	
}
?>	