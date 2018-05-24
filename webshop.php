<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- mobile -->
<title>BUTIK 1000TING | Jægergårdsgade 18-20, 8000 Århus C</title>
<meta name="description" content="Butik 1000Ting's webshop - gå på opdagelse i et univers af dekorationsgenstande.">
    
    <link href="css/styles_header.css" rel="stylesheet" type="text/css">
    <link href="css/styles_webshop.css" rel="stylesheet" type="text/css">
    
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600" rel="stylesheet">
</head>
 <body>
     
     <!-- HEADER INCLUDE -->
     <?php include "includes/header.php";?>
     
     <!-- Webshop picture banner -->
     <section class="webshop">
         <section class="webshop__banner">
             <img class="webshop__banner-image" src="images/webshop_banner.jpg">
             <h1 class="webshop__header">BUTIK 1000TING'S WEBSHOP</h1>
             <p class="webshop__subtext">Gå på opdagelse i et univers af dekorationsgenstande</p>
         </section>
         
         <!-- sidebar nav inspiration from https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav_dropdown -->
         <section class="webshop__filter">
             <button class="webshop__category">KATEGORIER</button>
             <div class="webshop__dropdown-open">
                 <a href="#" class="webshop__link">Børn</a>
                 <a href="#" class="webshop__link">Delikatesser</a>
                 <a href="#" class="webshop__link">Bolig</a>
                 <a href="#" class="webshop__link">Dame</a>
                 <a href="#" class="webshop__link">Skønhed</a>
             </div>
             <button class="webshop__category">PRODUKTER</button>
             <div class="webshop__dropdown-open">
                 <a href="#" class="webshop__link">Billeder &amp; plakater</a>
                 <a href="#" class="webshop__link">Gulvtæpper</a>
                 <a href="#" class="webshop__link">Lysestager</a>
                 <a href="#" class="webshop__link">Opbevaring</a>
                 <a href="#" class="webshop__link">Plaider &amp; tæpper</a>
                 <a href="#" class="webshop__link">Sofa- og pyntepuder</a>
                 <a href="#" class="webshop__link">Dekoration</a>
                 <a href="#" class="webshop__link">Vaser</a>
             </div>
              <button class="webshop__category">MÆRKER</button>
             <div class="webshop__dropdown-closed">
                 <a href="#" class="webshop__link">Bungalow</a>
             </div>
         </section>

         <!-- products section -->
         <section class="webshop__products">
             <ul class="webshop__list">
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik1.png" alt="Butik 1000Ting's product image">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy" id="modalBtn">KØB</a>
                     </div>
                 </li>
            
                <!-- The Modal -->
                <section class="webshop__modal" id="modal">
                  <!-- Modal content -->
                  <article class="webshop__modal-content">
                      <ion-icon class="modal-close" name="close"></ion-icon>
                      <img class="webahop__product-image" src="images/keramik1.png" alt="" width="40%">
                      <h1 class="webshop__modal-headline">BUNGALOW</h1>
                      <h2 class="webshop__modal-name">Keramik vase H 20cm misty grøn</h2>
                      <h2 class="webshop__modal-price">250,00 kr.</h2>
                      <p class="webhsop__modal-description">Vase af keramik til til f.eks. blomster. Fås i flere farver Bungalow. Tåler ikke maskinopvask.</p>
                  </article>
                </section>
                 
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik2.png" alt="Butik 1000Ting's product image">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy">KØB</a>
                     </div>
                 </li>
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik1.png" alt="Butik 1000Ting's product image">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy">KØB</a>
                     </div>
                 </li>
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik2.png" alt="Butik 1000Ting's product image">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy">KØB</a>
                     </div>
                 </li>
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik1.png" alt="Butik 1000Ting's product image">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy">KØB</a>
                     </div>
                 </li>
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik2.png" alt="Butik 1000Ting's product image">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy">KØB</a>
                     </div>
                 </li>
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik2.png" alt="Butik 1000Ting's product image">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy">KØB</a>
                     </div>
                 </li>
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik1.png" alt="Butik 1000Ting's product image">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy">KØB</a>
                     </div>
                 </li>
             </ul>
         </section>
         
     </section>

      <!-- js script for modal --> 
     <script src="js/cartmodal.js"></script>

     <!-- js script for sidebar nav --> 
     <script src="js/filter.js"></script>

     <!-- Ionicons -->
     <script src="https://unpkg.com/ionicons@4.1.1/dist/ionicons.js"></script>
     
</body>
</html>
