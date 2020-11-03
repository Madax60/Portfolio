<?php 
session_start();
include_once('../includes/header.php');
include_once('../traitement/traitement_profil.php');
if(isset($_SESSION["id"]))
{ 
?>
<a href="./backoffice.php">Revenir en arrière</a>
<h1 class="text-center">Mon profil</h1>

	<form method="POST" action="" enctype="multipart/form-data">
		<label for="nouvnom"><h3>Nom :</h3></label>
		<input type="text" name="nouvnom" id="nouvnom" placeholder="Nom" value="<?php echo $user['Nom_admin']; ?>" /><br>
		<?php 
		if (isset($msg)) {
			echo $msg;
		}
		 ?>
		<input type="submit" value="Changer de nom !" />
	</form>

	<form method="POST" action="" enctype="multipart/form-data">
		<label class="text-warning" for="nouvmdp1"><h3>Mot de passe :</h3></label>
		<input type="password" name="nouvmdp1" id="nouvmdp1" placeholder="Mot de passe"/><br>

		<label class="text-warning" for="nouvmdp2"><h3>Confirmation - mot de passe :</h3></label>
		<input type="password" name="nouvmdp2" id="nouvmdp2" placeholder="Confirmation du mot de passe" /><br><br>

		<input class="border border-warning bg-dark text-white p-2 font-weight-bold" type="submit" name="mdpchange" value="Changer de mot de passe !" />
	</form>

<?php  
}else
{ 
	var_dump($_SESSION);
    echo "Vous devez être connecté pour avoir accès à cette page !";
    echo "<a href='./connexion.php'>Se connecter</a>";
}

?>