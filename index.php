

<?php require_once('site_vitrine/assets/include/header2.php') ?>
    <div id="intro">

	<!-- Header -->
	<header id="head">
		<div class="container positiontxtheader">
			<div class="text-justify" style="color:black;">
			
				<h1 style="color:black; font-size:70px;">Welcome to Bob-e !</h1>
			
				
			</div>
			<p class="text-justify" style="color:black; font-size:20px;"><strong>Bienvenue sur le portail de notre projet. 
Découvrez Bob-e sous toutes ces facettes avec les différentes fonctionnalités disponibles sur le site !</strong>
</p>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		
		<h2 class="text-center"><strong>Notre Equipe</strong> </h2><hr>

		<br>
		<div class="row text-justify">

		<div class="col-4 text-center">
					
					<img
						class="img2"
						src="site_vitrine\assets\images\tiffany.jpg" 
						
    					alt="tiffany"
						height="200px" 
						width="200px" 
									/></br>
						<p class= "text-center"><b>Tiffany DA CRUZ PINTO - ING1 Web média</b></p>
						<p class= "text-center">Blender & Documents </p>
						<hr>
					</div>
					<div class="col-4 text-center">
					<img
						class="img2"
    					src="site_vitrine\assets\images\ben.jpg" href=""
    					alt="Ben"
						height="200px" 
						width="200px" 
									/></br>
						<p class="text-center"><b>Benjamin BUGARIN - ING1 Info.</b></p>
						<p>Dev. Front</p>
						<hr>
					</div>
					<div class="col-4 text-center">
					<img
						class="img2"
						src="site_vitrine\assets\images\voary.jpg" 
    					alt="voary"
						height="200px" 
						width="200px" 
									/></br>
						<p class="text-center"><b>Lucie VOARY ING2 Web média</b></p>
						<p>Blender</p>
						<hr>
					</div>
					
					<div class="col-4 text-center">
					<img
						class="img2"
    					src="site_vitrine\assets\images\alexandre.jpg" 
    					alt="alexandre"
						height="200px" 
						width="200px" 
									/></br>
						<p class= "text-center"><b>Alexandre BENTZ - ING2 Info.</b></p>
						<p>Blender & Documents</p>
					</div>	
					<div class="col-4 text-center">
					<img
						class="img2"
    					src="site_vitrine\assets\images\renaud.jpg" 
    					alt="voary"
						height="200px" 
						width="200px" 
									/></br>
						<p class="text-center"><b>Renaud LEFEVRE - ING2 Info.</b></p>
						<p>Dev. Back</p>

					</div>
					<div class="col-4 text-center">
					<img
						class="img2"
    					src="site_vitrine\assets\images\david.jpg" 
    					alt="voary"
						height="200px" 
						width="200px" 
									/></br>
						<p class="text-center"><b>David LE - ING2 Info.</b></p>
						<p class= "text-center">Pro-Blender </p>

					</div>

				</div> 
			</div>
		
	<div class="jumbotron top-space w-100">
		<div class="container w-100 text-center">
			<div id="creeCV">
				<h2 class="text-center"><strong>Aperçus de notre mascotte</strong> </h2><hr>
				</div>
				<br>
					<H6 class="row text-center">
						Notre mascotte Bob-e est née au sein de l’Institut G4, par des élèves de l’Institut G4 et pour l’Institut G4 !. Au fil des épreuves, nous avons conçu pour vous la mascotte idéale pour notre école !
					</h6></br></br>
					
				
				<div class="row text-justify">
					<div class="col-1"> <a> </a>
					</div>
					<h6 class="col-6" ><strong>Bob-e en cours</strong></h6>

				</div>
				
				<div class="row text-justify">
					<div class="col-5 align-left">
						<img class="img2" height="500px" 
						width="500px"src="site_vitrine\assets\images\work.png"/>
					</div>
					<div class="col-6 align-self-center">
							<a> Comme un élève de G4, nous avons modélisé Bob-e entre de suivre son cours de méthodes agiles. Malgré sa petite taille, il s’installe sur la table et utilise sa meilleure définition pour voir le tableau à travers les élèves !
							 </a></br></br>
					
					</div>
				</div>
				<div class="row text-justify">
					<h6 class="col-3 align-left offset-9" ><strong>Bob en pause café</strong></h6>
				</div>
					<div class="row text-justify">
					
					<div class="col-6 align-self-center">
					<a> Avec ses amis, Bob a lui aussi le droit de prendre une bonne pause pour reprendre des forces ! Un petit café ne fait jamais de mal pour se réveiller le matin, même pour un robot.
							 </a>
					</div>

					<div class="col-6 align-right">
						<img class="img2" height="500px" 
						width="500px"src="site_vitrine\assets\images\pause.png"/>
					</div>

					

	</div>

	<div class ="w-100">		
	<!-- container -->
	</div>
</div>


<br>

</div>	<!-- /container -->

</div> 


<?php require_once('site_vitrine\assets/include/footer.php'); ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
    $('#discover').live("click", function(){
        $('#intro').load('site_vitrine/discover.php', function() {
        })
    })
});
</script>


<script type="text/javascript" language="javascript">
$(document).ready(function() {
    $('#presentation').live("click", function(){
        $('#intro').load('site_vitrine/presentation.php', function() {
        })
    })
});


</script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
    $('#bob-e').live("click", function(){
        $('#intro').load('site_vitrine/bob-e.php', function() {
        })
    })
});


</script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
    $('#interraction').live("click", function(){
        $('#intro').load('site_vitrine/interraction.php', function() {
        })
    })
});


</script>