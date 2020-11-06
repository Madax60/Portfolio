<?php 
include_once('./treatment/treatment_contacts.php');
?>
<section id="contact" class="container-fluid mb-5">

<!-- Barre de séparation -->
	<div class="container w-25 border-section border border-warning"></div>
<!-- Contact -->
	<article class="container mx-auto mt-5">
		<h1 class="text-warning w-50 m-auto text-center">Contact</h1>
<!-- Contenu du formulaire de contact -->
		<div id="contactForm" class="container bg-warning mx-auto mt-5 h-50 px-5 pt-5 rounded ">
		  	<form class="container" action="index.php#contact" method="POST">
		  		<aside class="row">
	  				<div class="col text-center">
	  					<label for="fname"><b>Prénom</b></label><br>
		    			<input type="text" class="p-2 w-75 bg-dark text-white" id="fname" name="fname" placeholder="Votre Prénom">
	  				</div>
	  				<div class="col text-center">
	  					<label for="lname"><b>Nom</b></label><br>
			    		<input type="text" class="p-2 w-75 bg-dark text-white" id="lname" name="lname" placeholder="Votre Nom">
	  				</div>
		  		</aside>
		  		<aside class="">
		  			<div class="col text-center">
	  					<label for="email"><b>Mail</b></label><br>
			    		<input type="email" class="p-2 w-100 bg-dark text-white" id="email" name="email" placeholder="Votre mail">
	  				</div>
		  			<div class="col text-center">
	  					<label for="object"><b>Objet</b></label><br>
			    		<input type="text" class="p-2 w-100 bg-dark text-white" id="object" name="object" placeholder="Objet">
	  				</div>
		  			<div class="text-center">
			  			<label for="content"><b>Contenu</b></label><br>
				    	<textarea id="content" class="p-2 w-100 bg-dark text-white" name="content" placeholder="Sujet" rows="6" cols="40"></textarea><br>

			  			<input type="submit" name="formcontact" class="p-2 mt-4 bg-dark text-warning" value="Envoyer">
			  		</div>
			  		<div class="container text-center font-weight-bold"><?php if(isset($erreur)){echo $erreur;} ?></div>
		  		</aside>
		  	</form>
		  	<aside class="row mx-auto mt-2">
				<div class="col-md-6 col-sm-12 text-center font-weight-bold">
					<i class="fas fa-phone-alt"></i>
					<p>06 10 75 38 77</p>
				</div>
				<div class="col-md-6 col-sm-12 text-left text-justify font-weight-bold">
					<i class="fas fa-envelope"></i>
					<p class="w-75">mehdi.samni@lyceestvincent.fr</p>
				</div>
			</aside>
		</div>
<!-- Informations de contact -->
		
	</article>	
</section>