<?php 
session_start();
include_once('../includes/header.php');
if(isset($_SESSION["id"]))
{ 
?>
<section class="container_fluid">
	<article>
		<a class="text-warning" href="../index.php"><h3>Aller à l'accueil</h3></a>
		<a class="text-warning" href="./profil.php"><h3>Changer de nom et/ou de mot de passe</h3></a>
		<a class="text-warning" href="./administration.php"><h3>Espace administration</h3></a>
		<a class="text-warning" href="./deconnexion.php"><h3>Se déconnecter</h3></a>
	</article>
</section>
<?php  
}else
{ 
    echo "Vous devez être connecté pour avoir accès à cette page !";
    echo "<a href='./connexion.php'>Se connecter</a>";
}

?>