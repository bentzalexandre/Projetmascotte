

<div id="intro">



<header id="head2" class="secondary"></header> <!-- Creation head 2 sans le background pour page contact-->


       
       

    </div>
</div>
<div class="container text-center">
		<h2 class="text-center">Découvrir notre mascotte en réalité augmentée</h2><hr/>
		<br>
		<p class="center-align">
        Découvrez notre mascotte sous un autre angle, nous avons créé un QR code qui vous permet de voir Bob-e grâce à la réalité augmentée. 
        </p>
        <p class="center-align">
        Armez vous de votre téléphone et faites sortir Bob de votre écran en scannant le code ci-dessous !
        </p>
        <br/><br/>

<img src="site_vitrine/assets/images/qrcodeinc.png" 
    alt="QR CODE"/>	
</div>






</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type="text/javascript" language="javascript">
$(document).ready(function() {
    $('#presentation').live("click", function(){
        $('#intro').load('site_vitrine/presentation.php', function() {
        })
    })
});
</script>