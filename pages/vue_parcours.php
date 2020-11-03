<?php 
session_start();
include_once('../traitement/traitement_parcours.php');
include_once('../includes/header.php');
if(isset($_SESSION["id"]))
{ 
?>
<a href="./administration.php">Revenir en arrière</a>
<div style="overflow-x:auto;">
<table class="bg-warning w-50 mx-auto mt-5">
    <tr>
		<td class="p-3">Nom de l'étude/diplome</th>
		<td class="p-3">Description</th>
		<td class="p-3">Date début</th>
		<td class="p-3">Date fin</th>
    </tr>
    <?php 
    while ($donnees = $parcours->fetch())
    {

    ?>
    <tr>
		<td class="p-2"><?php echo $donnees['Nom_parcours'] ?></td>
		<td class="p-2"><?php echo $donnees['Description_parcours'] ?></td>
		<td class="p-2"><?php echo $donnees['Annee_debut_parcours'] ?></td>
		<td class="p-2"><?php echo $donnees['Annee_fin_parcours'] ?></td>
    </tr>
    <?php 
	}	
     ?>
</table>
</div>
<?php  
}else
{ 
	var_dump($_SESSION);
    echo "Vous devez être connecté pour avoir accès à cette page !";
    echo "<a href='./connexion.php'>Se connecter</a>";
}

?>