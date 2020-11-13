<?php 
session_start();

include('assets/include/connexionbdd.php');
require_once('assets/include/header.php'); 


 if(!isset($_GET['mat'])){
    $_GET['mat'] = '';
}
?>
<?php if(isset($_SESSION['id']) AND isset($_SESSION['pseudo'])){  ?>

<br><br><br><br>

<H2 class="text-center"> Bonjour <a class ="text-primary"><?php echo $_SESSION['pseudo'] ?></a> voici tes cours !  </h2>



<hr class="w-75">
<br><br>

<?php
    if($_SESSION['id_groupe'] == 1){
?>
<div class="container">
    <div class="text-center">
        <!--Bouton Ajout -->
        <div>
            <img src="assets/images/icons-1.1.0/icons/plus-circle.svg" alt="" width="32" height="32" title="" id="buttAdd" type="button" 
                onclick="document.getElementById('formAjout').style.display='inline';
                        document.getElementById('buttAdd').style.display='none';">
        </div>
        <br>
        <div>
            <!--Formulaire cacher pour ajouter un article-->
            <form action="ajoutcont.php" method="post" id="formAjout" style="display: none;">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="float-left h5">La matiere concernée</label><br>
                        <select name="mat" class="form-control">
                            <?php 
                                $statementMat = $bdd->query("SELECT * FROM matiere WHERE idMat > 1");
                                if($statementMat->rowCount()>0){
                                    while($idMat = $statementMat->fetch()){
                            ?>
                                    <option value="<?php echo $idMat['idMat'] ?>"><?php echo $idMat['matiere'] ?></option>
                            <?php 
                                    }
                                }
                            ?>                              
                        </select><br>
                    </div>
                    <div class="col-sm-4">
                        <label class="float-left h5">Numero de l'article</label><br>
                        <input class="form-control" type="text" name="artic"><br>
                    </div>
                </div>
                <input placeholder="Nom de l'article" class="form-control" type="text" name="titre"><br>
                <textarea name="contenu" id="editor"></textarea>
                <!--Pour le bouton Annuler il va afficher notre croix d'ajout de contenu et cacher notre formulaire-->
                <input class="float-right btn text-danger" type="button" value="Anuler" onclick="document.getElementById('formAjout').style.display='none';
                    document.getElementById('buttAdd').style.display='inline';">
                <input class="float-right btn text-success" type="submit" value="Valider">
            </form>
        </div>
    </div>
</div>
<br>
<hr class="w-100">
<?php
    }
?>


<div class="container-fluid d-flex  " id="wrapper">
<div class="row w-100 no-padding  ">
    <!-- Barre des matieres -->
    <div class=" bg-light border-right col-3" id="sidebar-wrapperr" >
        <div class="list-group list-group-flush">
        <?php
            //requete MySQL pour pouvoir afficher nos matiere sur le tableau vertical
            $statement1 = $bdd->query("SELECT * FROM matiere ORDER BY idMat");
            if($statement1->rowCount()>0){
                while($cont = $statement1->fetch()){
        ?>
            <a href="?mat=<?php echo $cont['idMat']?>" class="list-group-itemm text-center list-group-item-action bg-light"><?php echo $cont['matiere']?> </a>
        
        <?php
            }
        }
        ?>

        </div>
    </div>
         
    <?php 
        if($_GET['mat'] <= 1){ 
    ?>

    <!-- Introduction -->
    <div class="text-center col-9   " >
       Bienvenue sur la partie cours, ici tu trouveras des astuces et des bouts de code qui te permettra de coder plus rapidement 😉
    </div>

    <?php
        }else{
            $statement2 = $bdd->query("SELECT * FROM `contenudoc` ORDER BY num ");
            if($statement2->rowCount()>0){
    ?>
    
    
    <div class="accordion col-9" id="accordion_<?php echo $_GET["mat"] ?>" >
                            
    <?php
            while($conte = $statement2->fetch()){
                if($conte['id'] == $_GET["mat"]){               
    ?>
        <div class="card">
            <!-- Affichage du titre de contenu-->
            <div class="card-header "  id="heading<?php echo $conte['num']?>" >
                <div class="btn btn-link collapsed col-sm" aria-expanded="false" data-toggle="collapse" data-target="#collapse<?php echo $conte['num']?>" aria-controls="collapse<?php echo $conte['num']?>">
                    <h5 class="mb-0"> <?php echo $conte['titre'] ?> </h5>
                </div>
                    <?php 
                        if($_SESSION['id_groupe'] == 1){// SI on est admin on peut supprimer le contenu
                    ?>
                    <div class="float-right">
                        <!--Supprimer le contenu-->
                        <form action="suppcont.php" method="post">
                            <button class="btn btn-sm" type="submit">
                            <img src="assets\images\icons-1.1.0\icons/trash-svg.svg" width="25" height="" title="Supprimer le contenu"></button>
                            <input type="hidden" name="id" value="<?php echo $conte['id_titre'] ?>"/>  
                        </form>
                    </div>

                    <?php
                        }
                    ?>
                </h5>
                
            </div>
            <!-- Affichage du contenu -->
            <div id="collapse<?php echo $conte['num']?>" name="contenu" class="collapse w-100" aria-labelledby="heading<?php echo $conte['num']?>" data-parent="#accordion_<?php echo $_GET["mat"]?>">
                <?php 
                    if($_SESSION['id_groupe'] == 1){
                ?>   
                    <form action="updaptecont.php"  method="post" id="form<?php echo $conte['id_titre'] ?>" style="display:none;">

                        <textarea name="conten" id="editor<?php echo $conte['id_titre'] ?>"><?php echo htmlspecialchars($conte['contenu']);?></textarea>
                        <input type="hidden" name="num" value="<?php echo $conte['num'] ?>"/>
                        <input type="hidden" name="id_titre" value="<?php echo $conte['id_titre'] ?>"/>
                        <br>
                        <input class="float-right btn text-danger" type="button"  value="Anuler"
                        onclick="document.getElementById('form<?php echo $conte['id_titre'] ?>').style.display='none';
                        document.getElementById('cache<?php echo $conte['id_titre'] ?>').style.display='inline';
                        document.getElementById('buttonUp<?php echo $conte['id_titre'] ?>').style.display='inline';">
                        <input class="float-right btn text-success " type="submit" value="Valider" >
                    </form>
                
                <?php
                    } 
                ?>
                <div class="card-body w-100 " id="cache<?php echo $conte['id_titre'] ?>" >
                    <?php echo $conte['contenu'];?>
                </div>
                <?php 
                    if($_SESSION['id_groupe'] == 1){
                ?>

                <input name="Update" type="button" id="buttonUp<?php echo $conte['id_titre'] ?>" value="Modifier le contenu" class="float-right btn btn-secondary btn-md"
                        onclick="document.getElementById('form<?php echo $conte['id_titre'] ?>').style.display='inline';
                        document.getElementById('cache<?php echo $conte['id_titre'] ?>').style.display='none';
                        document.getElementById('buttonUp<?php echo $conte['id_titre'] ?>').style.display='none';" />
                <?php
                    } 
                ?>
            </div>
        </div>
            
    <?php        
                }
            }
            }
        }
    ?>
            
    </div>
    </div>
</div>
<?php if($_GET['mat'] != 1){ ?>
<!-- COMMENTAIRES -->
<div class="jumbotron top-space w-100">
    
	<div class="container">
    
		<div id="creeCV">
        <?php 
            $req = $bdd->prepare('SELECT idMat,matiere  FROM matiere WHERE idMat = ? '); // on cree la requete pr choisir le titre quand id_titre = à get['mat'] 
            $req->execute(array($_GET['mat']));
            while ($titre = $req->fetch()) {
        ?>
            <h2 class="thin text-center">Espace Commentaires : <?php  echo $titre['matiere']?></h2>
        <?php 
            }
        ?>
        
        </div>
        <p class="text-muted ">
            <!-- IMPORTANT DABORD ON FAIS LA REQUETTE POUR VOIR LES COMMENTAIRES  ON CREE UNE BOUCLE ON REGARDE SI IL YA DES DONNEES ON EXECUTE SA PUIS FERME LA BOUCLE AU SINON ON ECRIS EXISTE PAS -->

        <?php 
            $req = $bdd->prepare('SELECT id,pseudo, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh %imin\') AS date_commentaire_fr FROM commentaires WHERE id_matiere = ? ORDER BY date_commentaire DESC'); 
            $req->execute(array($_GET['mat']));
            if($req->rowCount() == 0){ // SI ROWCOUNT = 0 DONT IL YA PAS DE COMM ON ECHO XXX SINON ON FAIS LA BOUCLE
            ?>
                <div class='text-center'>Pas encore de commentaires , soyez le premier ! </div>
            <?php
            }else{

                while ($donnees = $req->fetch()){
        ?>  
        <div class ="border-top"></div>
 
            <?php 
                if ($_SESSION['pseudo'] == $donnees['pseudo']){ //On affiche sa uniquement si le pseudo = a la session donc juste SES commentaires
            ?> 

            <!--Supprimer le commentaire-->
            <form action="suppcom.php" method="post" class="del2">
                <button class="btn btn-sm" type="submit">
                <img src="assets\images\icons-1.1.0\icons/trash-svg.svg" width="16" height="16" class="float-right" title="Supprimer le commentaire"></button>
                <input type="hidden" name="id" value="<?php echo $donnees['id'] ?>"/>  
            </form> 
            
            <?php 
                } 
            ?>
            
            <p class="text-center float-none"><strong><?php echo htmlspecialchars($donnees['pseudo']); ?></strong> le <?php echo $donnees['date_commentaire_fr']; ?></p>
            <p class="text-center"><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>  
            
            
        <?php 
                }
            } 
        ?>

        </div>
        <div class="w-100"></div>
			<!-- Article main content -->
			<article class="text-center">
				<header class="page-header">
					<h4 class="page-title">Ajoute ton commentaire !</h4>
                </header>
                <form action="courscomm_post.php" method="post">
                    <br>
                    <p class=""></p> 
                    <input type="hidden" name="pseudo" value="<?php echo $_SESSION['pseudo'] ?>"/>  
                    <input type="hidden" name="id_membres" value="<?php echo $_SESSION['id'] ?>"/>  

                    <input type="hidden" name="id_matiere" value="<?php echo $_GET['mat'] ?>"/>  
                    <div class="col-sm-12">
						<div class="col-sm-4 offset-sm-4 ">
							<textarea placeholder="Ecrivez votre message ici..." class="form-control" name ="commentaire"rows="9"></textarea>
						</div>
					</div>
					<br>
					<div class="row">	
						<div class="col-sm-12 ">
								<input class="btn btn-action" type="submit" value="Envoyer le message">
							</div>
						</div>
				</form>
			</article>
        </div>


        <?php } ?>   
        <?php 
                }else{ if(!isset($_POST['pseudo'])){
                    $_POST['pseudo'] = '';
                }
                    if(!isset($_POST['email'])){
                        $_POST['email'] = '';
                }?>
        
<header id="head2" class="secondary"></header> <!-- Creation head 2 sans le background pour page contact-->

<!-- container -->
<div class="container">


    <div class="row">
        
        <!-- Article main content -->
        <article class="col-sm-5 maincontent">
            <header class="page-header">
                <h1 class="page-title">Inscrivez vous !</h1> 
            </header>
            
            <p>
                Devenez membre de SupportEtudiantG4 !</p>
            <br>
            <form action="signin_post.php" method="post" id="register_form">
                 <div class="form-group">
                     <label for="pseudo">Pseudonyme <a style="color:red;">*</a> :</label><input type="text" name="pseudo"  class="form-controll" value="<?php echo htmlspecialchars($_POST['pseudo'])?>"/><br /> <!-- value on protege contre l'injection de html grace a htmlspecialchars -->
                     <?php if(isset($pseudo_error)) { ?>     <!-- On a cree l'erreur dans result.php ou si pseudo _ error est true (existe)(soit il est vide car il existe si et seulement si il est vide) , on l'affiche-->
                    <p class="form_error"> <?php echo $pseudo_error ?> </p> 
                     <?php } ?>


                    <label for="pass">Mot de passe <a style="color:red;">*</a> :</label>   <input type="password" name="pass" class="form-controll" /><br />
                    <label for="pass2">Confirmez votre mot de passe <a style="color:red;">*</a> :</label><input type="password" name="pass2" id="pass2" class="form-controll" /><br />
                    <?php if(isset($password_error)) { ?>     <!-- idem pour le mot de passe-->
                    <p class="form_error"> <?php echo $password_error ?> </p> 
                    <?php } ?>


                    <label for="email">Email <a style="color:red;">*</a> :</label><input type="text" name="email"   class="form-controll" value="<?php echo htmlspecialchars($_POST['email'])?>"/><br /> 
                    <?php if(isset($email_error)) { ?>     <!-- idem pour le mot de passe-->
                    <p class="form_error"> <?php echo $email_error ?> </p> 
                    
                    <?php } ?>
                    <p><a style="color:red;">*</a> Champs obligatoires </p>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </article>
        <!-- /Article -->
        <div class="col maincontent" style="margin-top:230px;"> 
                    
            
            <H1>
            Où</H1>
            <br>
                    </div>
        
        <!-- Sidebar -->
        <article class="col-sm-5 maincontent">
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
        <?php 
                } 
        ?>

    </div>
</div>

<?php require_once('assets/include/footer.php'); ?>
