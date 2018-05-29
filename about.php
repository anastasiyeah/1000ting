<!doctype html>
<html lang="da">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BUTIK 1000TING | OM OS</title>
<meta name="description" content="Butik 1000Ting - mere end bare en butik. Vi bestræber os på at indrette en butik, der giver plads til, at gå på opdagelse mellem de mange nøje udvalgte produkter. ">

    <link href="css/styles_about.css" type="text/css" rel="stylesheet">     
    <link href="css/styles_header.css" type="text/css" rel="stylesheet"> 
    
    <!-- remove the user agnet stylesheet -->
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    
    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,600" rel="stylesheet">
    
    <!-- Script Header + link font icon--> 
    <script src="js/header.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Script for flower animation -->
    <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
    <script src="js/animationflower.js"></script>
    <script src="js/animation.js"></script>
    
    
</head>
	
<body onload="init();"> <!-- executes the animation js after the page has been loaded -->
	
	   <!-- Header include -->
     <?php include "includes/header.php";?>

	<!-- about section  -->
	<section class="about">
		<article class="about__article">
            <h1 class="about__headline">Meget mere end bare en butik</h1>
		      <p class="about__maintext">Butik 1000Ting er mere en bare en butik. Vi tror på kreative tanker og elsker at indrette os     med finurlige elementer og farver. Vi bestræber os på at indrette en butik, der giver plads til, at gå på opdagelse         mellem de mange nøje udvalgte produkter.  Vi er draget af kreativitet og personlig udfoldelse, hvilket afspejler sig     i vores produkter, der hjælper dig til, at skabe et hjem med dit eget personlige touch. <br>Siden butikkens oprindelse har vi fungeret som et kommunalt projekt, hvor det daglige arbejde inddrager socialt udsatte unge. Vi er med til at     tage et socialt ansvar. 
	      </p>
		</article>
	   <img class="about__img" src="images/plantetplants.png" alt="Hanging plants Butik 1000Ting" >
	</section>
	
    <!-- Flower animation -->
	<div id="animation_container" >
		<canvas id="canvas"></canvas>
		<div id="dom_overlay_container">
		</div>
	</div>
	
	<!-- Footer Gallery -->		
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