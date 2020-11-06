<?php 
session_start();
include_once('./treatment/treatment_contacts.php');
include_once('./includes/header.php');
if(isset($_SESSION["id"]))
{ 
?>
<a class="text-warning font-weight-bold" href="./administration.php">Revenir en arrière</a>
<table class="bg-warning w-50 mx-auto mt-5">
    <tr class="p-3">
		<th class="p-3">Nom</th>
		<th class="p-3">Prénom</th>
		<th class="p-3">Objet</th>
		<th class="p-3">Description</th>
    </tr>
    <?php 
    while ($donnees = $contacts->fetch())
    {

    ?>
    <tr>
		<td class="p-2"><?php echo $donnees['nom_contact'] ?></td>
		<td class="p-2"><?php echo $donnees['prenom_contact'] ?></td>
		<td class="p-2"><?php echo $donnees['objet_contact'] ?></td>
		<td class="p-2"><?php echo $donnees['description_contact'] ?></td>
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
    echo "<a href='./login.php'>Se connecter</a>";
}

?>