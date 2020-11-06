<?php 
include_once('./includes/header.php');
include_once('./treatment/treatment_project.php');
?>

<section id="works" class="container-fluid mt-5 minvh100">
	<a href="./index.php?#works">Revenir en arrière</a>
	<div class="container w-25 border-section border border-warning"></div>
	<h1 class="text-warning text-center mt-5 mb-4"><?php echo $projet['titre_projet']; ?></h1>
	<div class="container w-2 border-section border border-warning"></div>
</section>
<?php 
include_once('./includes/footer.php');
?>