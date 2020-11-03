<?php 
session_start();
include_once('../includes/header.php');
if(isset($_SESSION["id"]))
{ 
?>
<a href="./backoffice.php">Revenir en arrière</a>
<section class="container_fluid">
	<article>
		<a href="vue_projets.php"><h3>Vue des projets</h3></a>
		<a href="vue_parcours.php"><h3>Vue du parcours</h3></a>
		<a href="vue_contacts.php"><h3>Vue des contacts</h3></a>
	</article>
</section>

<?php  
}else
{ 
	var_dump($_SESSION);
    echo "Vous devez être connecté pour avoir accès à cette page !";
    echo "<a href='./connexion.php'>Se connecter</a>";
}

?>
