<?php 
session_start();
include_once('./includes/header.php');
if(isset($_SESSION["id"]))
{ 
?>
<a class="text-warning font-weight-bold" href="./backoffice.php">Revenir en arrière</a>
<section class="container_fluid">
	<article>
		<a class="text-warning font-weight-bold" href="./view_projects.php"><h3>Vue des projets</h3></a>
		<a class="text-warning font-weight-bold" href="./view_studies.php"><h3>Vue du parcours</h3></a>
		<a class="text-warning font-weight-bold" href="./view_contacts.php"><h3>Vue des contacts</h3></a>
	</article>
</section>

<?php  
}else
{ 
	var_dump($_SESSION);
    echo "Vous devez être connecté pour avoir accès à cette page !";
    echo "<a href='./login.php'>Se connecter</a>";
}

?>
