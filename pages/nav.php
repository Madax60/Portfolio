<nav id="nav" class="container-fluid .sticky-top bg-warning row list-unstyled m-0 text-center sticky-top">
	<a class="col-md-2" href="#home">Accueil</a>
	<a class="col-md-2 bg-dark text-warning" href="#about">Profil</a>
	<a class="col-md-2" href="#studies">Parcours</a>
	<a class="col-md-2" href="#works">Mes réalisations</a>
	<a class="col-md-2" href="./pages/connexion.php"><?php if(isset($_SESSION['id'])){  echo "Administration"; } ?></a>
	<a class="col-md-2" href="#contact">Contact</a>
</nav>

