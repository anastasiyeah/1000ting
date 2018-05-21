<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- mobile -->
<title>1000 TING | Jægergårdsgade 18-20, 8000 Århus C</title>
<meta name="description" content="">
    
    <link href="css/styles_header.css" rel="stylesheet" type="text/css">
    <link href="css/styles_webshop.css" rel="stylesheet" type="text/css">
    
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
	
</head>
 <body>
     
     <!-- HEADER INCLUDE -->
     <?php include "includes/header.php";?>
     
     <!-- Webshop picture banner -->
     <section class="webshop">
         <section class="webshop__banner">
             <img src="images/webshop_banner.jpg" width="100%">
             <h1 class="webshop__header">1000TING'S WEBSHOP</h1>
             <p class="webshop__subtext">Cae nam fugiaepturem voles dunt magnis apicim quo</p>
         </section>
         
         <!-- inspiration from https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav_dropdown -->
         <section class="webshop__filter">
             <button class="webshop__category">KATEGORIER<i class="fa fa-caret-down"></i></button> <!-- ionicon -->
             <div class="webshop__dropdown-open">
                 <a href="#" class="webshop__link">Børn</a>
                 <a href="#" class="webshop__link">Delikatesser</a>
                 <a href="#" class="webshop__link">Bolig</a>
                 <a href="#" class="webshop__link">Dame</a>
                 <a href="#" class="webshop__link">Skønhed</a>
             </div>
             <button class="webshop__category">PRODUKTER</button>
             <div class="webshop__dropdown-open">
                 <a href="#" class="webshop__link">Billeder & plakater</a>
                 <a href="#" class="webshop__link">Gulvtæpper</a>
                 <a href="#" class="webshop__link">Lysestager</a>
                 <a href="#" class="webshop__link">Opbevaring</a>
                 <a href="#" class="webshop__link">Plaider & tæpper</a>
                 <a href="#" class="webshop__link">Sofa- og pyntepuder</a>
                 <a href="#" class="webshop__link">Dekoration</a>
                 <a href="#" class="webshop__link">Vaser</a>
             </div>
              <button class="webshop__category">MÆRKER</button>
             <div class="webshop__dropdown-closed">
                 <a href="#" class="webshop__link">Bungalow</a>
             </div>
         </section>

         <!-- taken from Grundfos project -->
         <section class="webshop__products">
             <ul class="product-list">
                 <li class="relative">
                     <img src="images/keramik1.png" width="50%" alt="">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <a class="add-to-cart absolute hover" href="#">BUY NOW</a>
                 </li>
                 
                 <li class="relative">
                     <img src="images/keramik2.png" width="50%" alt="">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <a class="add-to-cart absolute hover" href="#">BUY NOW</a>
                 </li>
             </ul>
         </section>
     </section>

     <script src="js/filter.js"></script>

     <!-- Ionicons -->
     <script src="https://unpkg.com/ionicons@4.1.1/dist/ionicons.js"></script>
     
</body>
</html>
