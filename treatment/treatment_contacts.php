<?php 
include_once('./treatment/login_bdd.php'); // Fichier PHP contenant la connexion à votre BDD

$contacts = $bdd->query('SELECT * FROM contact');

if(isset($_POST['formcontact'])) {
   	$fname = htmlspecialchars($_POST['fname']);
   	$lname = htmlspecialchars($_POST['lname']);
   	$mail = htmlspecialchars($_POST['email']);
   	$object = htmlspecialchars($_POST['object']);
   	$content = htmlspecialchars($_POST['content']);
   	if(!empty($_POST['fname']) AND !empty($_POST['lname']) AND !empty($_POST['email']) AND !empty($_POST['object']) AND !empty($_POST['content'])) {
   		var_dump($fname, $lname, $mail, $object, $content);
 		$insertmbr = $bdd->prepare("INSERT INTO `contact` (`nom_contact`, `prenom_contact`, `mail_contact`, `objet_contact`, `description_contact`) VALUES ( ?, ?, ?, ?, ?");
     	$insertmbr->execute(array($lname ,$fname, $mail, $object, $content));
		var_dump($insertmbr);
     	$erreur = "Le formulaire a bien été soumis !";
	} else {
	  $erreur = "Tous les champs doivent être complétés !";
	}
}

?>	