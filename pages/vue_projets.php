<?php 
session_start();
include_once('../traitement/traitement_projets.php');
include_once('../includes/header.php');
if(isset($_SESSION["id"]))
{ 
?>
<a href="../">ezstfg</a>
<a href="./administration.php">Revenir en arrière</a>
<table class="bg-warning w-50 mx-auto mt-5">
    <tr class="p-3">
		<th class="p-3">Nom du projet</th>
		<th class="p-3">Description</th>
		<th class="p-3">Date début</th>
		<th class="p-3">Date fin</th>
		<th class="p-3">Technologie(s) utilisée(s)</th>
    </tr>
    <?php 
    while ($donnees = $projets->fetch())
    {

    ?>
    <tr>
		<td class="p-2"><?php echo $donnees['Titre_projet'] ?></td>
		<td class="p-2"><?php echo $donnees['Description_projet'] ?></td>
		<td class="p-2"><?php echo $donnees['Date_debut_projet'] ?></td>
		<td class="p-2"><?php echo $donnees['Date_fin_projet'] ?></td>
		<td class="p-2">Bla</td>
    </tr>
    <?php 
	}	
     ?>
</table>

<?php  
}else
{ 
	var_dump($_SESSION);
    echo "Vous devez être connecté pour avoir accès à cette page !";
    echo "<a href='./connexion.php'>Se connecter</a>";
}

?>