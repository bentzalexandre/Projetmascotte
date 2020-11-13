

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
						<p class= "text-center">Tiffany DA CRUZ PINTO - ING-1 Web média</p>
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
						<p class="text-center">Benjamin BUGARIN - ING-1 Info.</p>
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
						<p class="text-center">Lucie Voary RABEZAHANARY ING-2 Web média</p>
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
						<p class= "text-center">Alexandre BENTZ - ING-2 Info.</p>
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
						<p class="text-center">Renaud LEFEVRE - ING-2 Info.</p>
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
						<p class="text-center">David LE - ING-2 Info.</p>
						<p class= "text-center">Blender </p>

					</div>

				</div> 
			</div>
		
	<div class="jumbotron top-space w-100">
		<div class="container w-100 text-center">
			<div id="creeCV">
				<h2 class="text-center"><strong>Preview de notre mascotte en 2D</strong> </h2><hr>
				</div>
				<br>
					<H6 class="row text-center">
				Notre mascotte Bob est née au sein de l’Institut G4, dans le cadre du cercle de projets. Au fil des épreuves, nous avons conçu pour vous la mascotte idéale pour notre école !
					</h6></br></br>
					
				
				<div class="row text-justify">
					<div class="col-3"> <a> </a>
					</div>
					<h6 class="col-9 align-right" ><strong>Technologie & Innovation</strong></h6>

				</div>
				
				<div class="row text-justify">
					<div class="col-3 align-left">
						<a> Image </a>
					</div>
					<div class="col-9 align-right">
							<a> Cette mascotte, Bob, récemment créée fait preuve d’innovation, elle est entièrement conçu du début à la fin sur le logiciel Blender, qui est un logiciel de création 3D et 2D. Notre mascotte est programmé et fait preuve d’une technique infaillible, puisqu’en  dehors de représenter notre établissement, elle est accessible  à l’ensemble des utilisateurs, ils peuvent, s’il le souhaite, interagir avec elle, Bob est totalement programmée !
							 </a></br></br>
					
					</div>
				</div>
				<div class="row text-justify">
					<h6 class="col-3 align-left" ><strong>Autonomie & Entrepreneuriat</strong></h6>
				</div>
					<div class="row text-justify">
					
					<div class="col-9 align-left">
					<a> La création de cette mascotte a demandé énormément d’autonomie, mais également du travail de groupe. Sa programmation et sa réalisation on dû prendre du temps, nous avons dû réaliser plusieurs testent et avoir une véritable coordination d’équipe, afin que le résultat puisse être concluant.

							 </a>
					</div>

					<div class="col-3 align-right">
						<a> Image </a>
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