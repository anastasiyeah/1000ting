<!doctype html>
<html>
	
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content="">

<link href="css/om_os.css" type="text/css" rel="stylesheet"> 
<link href="css/styles_header.css" type="text/css" rel="stylesheet"> 
    
    <link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
	
<title>1000 TING | OM OS</title>

    <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
    <script src="js/animationflower.js"></script>
    <script src="js/animation.js"></script>
</head>
	
<body onload="init();">
	
	   <!-- HEADER INCLUDE -->
     <?php include "includes/header.php";?>

	<!---- OM OS  ---->

	<section class="about">
		<article class="about__article">
		<h1 class="about__headline">Meget mere end bare en butik</h1>
		<p class="about__maintext">Med en lang historie i Jægergårdsgade, der strækker sig over mere end 25 år, har Vi igennem årene fået skabt et kreativt og hyggeligt miljø i butikken, der indbyder kunderne til, at gå på opdagelse i vores stemningsfyldte, specielle butik.
			Det summende gadeliv, Jægergårdsgade har, er med til at skabe en helt specielt og hyggelig stemning, som gennemstrømmer butikken - <br> Vi er en del af Jægergårdsgade - Jægergårdsgade er en del af os	</p>
		</article>
	<img class="about__img" src="images/hangingplants.jpg" alt="Hanging plants Butik 1000Ting" >
	</section>
	
    <!-- Flower animation -->
	<div id="animation_container" >
		<canvas id="canvas" width="500px"></canvas>
		<div id="dom_overlay_container">
		</div>
	</div>
	
	
	<!---- Footer Gallery ---->		
	<section class="gallery">
        <h1 class="gallery__headline">KOM IND OG MÆRK STEMNINGEN</h1>
		<img class="gallery__img" src="images/buddha.jpg" alt="Buddha decoration">
        <img class="gallery__img" src="images/feather.jpg" alt="Decorations feather">
        <img class="gallery__img" src="images/postcard.jpg" alt="Postcard Frida Carlo">
	</section>
    
    
	
	   <!-- Ionicons -->
     <script src="https://unpkg.com/ionicons@4.1.1/dist/ionicons.js"></script>
    
</body>
	
</html>