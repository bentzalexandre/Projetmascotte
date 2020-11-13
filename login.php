
<?php 

include('assets/include/connexionbdd.php'); ?>



<?php if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))  // SI IL YA UNE SESSION ID SESSION PSEUDO GRACE AU SESSION SET DANS CONNEXION.PHP ON AFFICHE SA
 { header('location:index.php');


  }else{ ?>


<?php 

require_once('assets/include/header.php'); ?>

<?php if(!isset($_POST['pseudo'])){
    $_POST['pseudo'] = '';
}
    if(!isset($_POST['email'])){
        $_POST['email'] = '';
}
if(!isset($_POST['restez'])){
    $_POST['restez'] = '';
}?>

<header id="head2" class="secondary"></header> <!-- Creation head 2 sans le background pour page contact-->

	<!-- container -->
	<div class="container">


		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Connectez-vous !</h1>
				</header>
				
				<p>
					Accedez à votre espace personnel !</p>
				<br>
                <form action="login_post.php" method="post" id="register_form">
                     <div class="form-group">
					 <?php if(isset($error)) { ?>     <!-- On a cree l'erreur dans result.php ou si pseudo _ error est true (existe)(soit il est vide car il existe si et seulement si il est vide) , on l'affiche-->
                        <p class="form_error"> <?php echo $error ?> </p> 
                         <?php } ?>

                         <label for="pseudo">Pseudonyme <a style="color:red;">*</a> :</label><input type="text" name="pseudo"  class="form-controll" value="<?php echo htmlspecialchars($_POST['pseudo'])?>"/><br /> <!-- value on protege contre l'injection de html grace a htmlspecialchars -->
                         <?php if(isset($pseudo_error)) { ?>     <!-- On a cree l'erreur dans result.php ou si pseudo _ error est true (existe)(soit il est vide car il existe si et seulement si il est vide) , on l'affiche-->
                        <p class="form_error"> <?php echo $pseudo_error ?> </p> 
                         <?php } ?>


                        <label for="pass">Mot de passe <a style="color:red;">*</a> :</label>   <input type="password" name="pass" class="form-controll" /><br />
                        <label for="restez" class="labelcheck"> Restez connecter !<input type="checkbox" id="restez" name="restez" value="restez"></label><br>
						<p><a style="color:red;">*</a> Champs obligatoires </p>

                        <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Adresse</h4>
					<address>
						30 Rue Turbigot, 75003 Paris
					</address>
					<h4>Téléphone</h4>
					<address>
					01 84 16 20 10
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	
	<section class="container-full top-space">
		<div id="map"></div>
	</section>

<?php require_once('assets/include/footer.php'); ?>
 <?php }?>