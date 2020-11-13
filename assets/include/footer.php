<footer id="footer" class="top-space "> <!-- Pour avoir un espace en haut de 60 px que j'ai regle et que il soit tjr fixer enbas-->

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>01 84 16 20 10<br>
								<br>
30 Rue Turbigo 75003 Paris							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Nous suivre</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href = "https://www.facebook.com/InstitutG4/"><img src="assets/images/icons-1.1.0/icons/Facebook.svg"  alt="" width="32" height="32" title="Facebook" ></a>
								<a href = "https://twitter.com/G4formation"><img src="assets/images/icons-1.1.0/icons/twitter.svg" alt="" width="32" height="32" title="twitter" ></a>

								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Description</h3>
						<div class="widget-body">
							<p>
</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="index.php">Acceuil</a> | 
								<a href="presentation.php">Présentation du projet</a> |
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2020, *nom de la mascotte*.  
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>

	<script src="assets/js/ckeditor.js"></script>

	<script>
		ClassicEditor
			.create( document.querySelector( '#editor' ), {
				// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
			} )
			.then( editor => {
				window.editor = editor;
			} )
			.catch( err => {
				console.error( err.stack );
			} );
	</script>

	<script>
		<?php 
			$statEditor = $bdd->query("SELECT * FROM `contenudoc` ORDER BY num ");
            if($statEditor->rowCount()>0){
				while($edit = $statEditor->fetch()){
		?>
		ClassicEditor
			.create( document.querySelector( '#editor<?php echo $edit['id_titre'] ?>' ), {
				// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
			} )
			.then( editor => {
				window.editor = editor;
			} )
			.catch( err => {
				console.error( err.stack );
			} );
		<?php }} ?>
	</script>
		
	</body>
</html>





