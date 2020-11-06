<?php 
include_once('./treatment/treatment_project.php');
 ?>

<section id="works" class="container-fluid mt-5 minvh100">
	<div class="container w-25 border-section border border-warning"></div>
	<h1 class="text-warning text-center mt-5 mb-4">Mes réalisations</h1>
	<div class="container w-2 border-section border border-warning"></div>
	<article class="container mx-auto my-5 w-100">
		
		<div class="row">
	<?php 
    while ($donnees = $projets->fetch())
    {

    ?>
		<div class="card w-75 bg-dark text-dark m-0 p-2 col-md-3 col-sm-6 col-sm-10 border-0 card-scale d-flex justify-content space-around">
			<img class="card-img-top border border-dark" src="./resources/portfolio.png" alt="Card image cap">
			<div class="card-body rounded-bottom bg-warning p-2 position-relative d-flex flex-column">
				<h5 class="card-title"><?php echo $donnees['titre_projet'] ?></h5>
				<p class="card-text mb-5"><?php echo $donnees['description_projet'] ?></p>
				<div class="p-1 w-100 text-center position-absolute buttonWorks">
					<a href="./project.php?id=<?php echo $donnees['id_projet']; ?>" class="btn btn-primary p-1 w-50 bg-dark text-warning font-weight-bold border-0 ">En savoir +</a>
				</div>
				
			</div>
		</div>
	<?php 
	}	
	?>
		</div>
	</article>
</section>