<?php 
include_once('./treatment/treatment_studies.php');
 ?>
<section id="studies" class="container-fluid mt-5 minvh100">
	<div class="container w-25 border-section border border-warning"></div>
    <h1 class="text-warning text-center mt-5 mb-4">Parcours</h1>
    <div class="container w-2 border-section border border-warning"></div>
	<article class="container spacebetweenpart mx-auto w-75 ">
		
		<div class="container">
			<div class="main-timeline mt-5">
    			<?php 
    		    while ($donnees = $parcours->fetch())
    		    {

    		    ?>
                <!-- start experience section-->
                <div class="timeline">
                    <div class="icon"></div>
                    <div class="date-content">
                        <div class="date-outer">
                            <span class="date">
                                <span class="year"><?php echo $donnees['annee_fin_parcours'] ?></span>
                                <span class="year">-</span>
                            	<span class="year"><?php echo $donnees['annee_debut_parcours'] ?></span>
                            </span>
                        </div>
                    </div>
                    <div class="timeline-content">
                        <h5 class="title text-warning text-center"><?php echo $donnees['nom_parcours'] ?></h5>
                        <p class="description text-white mx-4">
                            <?php echo $donnees['description_parcours'] ?>
                        </p>
                    </div>
                </div>
                <!-- end experience section-->
                <?php 
                }
                ?>
            </div>
            
		</div>
	</article>	
</section>