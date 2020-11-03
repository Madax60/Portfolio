<?php 
include_once('./traitement/traitement_projets.php');
 ?>
 <a href="../traitement/traitement_projets.php">a</a>
<section id="works" class="container-fluid mt-5">
	<div class="container w-25 border-section border border-warning"></div>
	<h1 class="text-warning w-75 m-auto text-center">Mes réalisations</h1>
	<article class="container mx-auto my-5 w-100 row">
		<?php 
    while ($donnees = $projets->fetch())
    {

    ?>
		<div class="card bg-dark text-dark p-2 col-md-3 border-0 card-scale">
			<img class="card-img-top border border-dark" src="./ressources/portfolio.png" alt="Card image cap">
			<div class="card-body rounded-bottom bg-warning p-2">
				<h5 class="card-title"><?php echo $donnees['Titre_projet'] ?></h5>
				<p class="card-text"><?php echo $donnees['Description_projet'] ?></p>
				<a href="#" class="btn btn-primary p-1 bg-dark text-warning font-weight-bold border-0">En savoir +</a>
			</div>
		</div>
	<?php 
	}	
	 ?>
		
	</article>
</section>