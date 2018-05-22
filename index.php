<!doctype html>
<html>
	
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content="">

<link href="css/index.css" type="text/css" rel="stylesheet"> 
<link href="css/styles_header.css" type="text/css" rel="stylesheet"> 
    <link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
	
<title>1000 TING | Jægergårdsgade 18-20, 8000 Århus C</title>
    
    
    
<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="js/animationflower.js"></script>
<script src="js/animation.js"></script>

</head>
	
<body onload="init();">
	
	   <!-- HEADER INCLUDE -->
     <?php include "includes/header.php";?>

	<!---- VIDEO ---->
	
    
    <video autoplay muted loop class="video">
  <source src="video/Butik1000Ting.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
	
	<!---- PRODUCTS AND LINK TO WEBSHOP ---->		
		<section class="products">
			<p class="products__description">Alle vores produkter er enten nøje udvalgt, fremstillet af genbrugsmaterialer, håndlavede unikaer eller fra en helt anden etnisk kultur. Fælles for alt er, at det er produkter med en historie og en personlighed.</p>
		</section>
		
	<a href="#" class="webshoplink" >GÅ TIL WEBSHOP</a>

	
	
	<!---- OPENING HOURS ---->		
	<section class="openinghours">
		<h2 class="openinghours__h2" >Vi er mere end bare en butik!</h2>
		<h4 class="openinghours__h4" >Kom forbi og se for dig selv</h4>
		<p class="openinghours__p">Mandag-torsdag: 10:00 - 17:30 <br> Fredag: 10:00 - 18:00 <br> Lørdag: 10:00 - 14:00 <br>Søndag: lukket</p>
		<!--- <address>Jægergårdsgade 18-20, 8000 Århus C</address> -->
	</section>
    
    	
	<div id="animation_container" >
		<canvas id="canvas"></canvas>
		<div id="dom_overlay_container">
		</div>
	</div>
    
       <!-- Ionicons -->
     <script src="https://unpkg.com/ionicons@4.1.1/dist/ionicons.js"></script>
  
</body>
	
</html>