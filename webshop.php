<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- mobile -->
<title>BUTIK 1000TING | Jægergårdsgade 18-20, 8000 Århus C</title>
<meta name="description" content="">
    
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

         <!-- products -->
         <section id="main" class="webshop__products">
             <ul class="webshop__list">
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik1.png" alt="">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy">KØB</a>
                     </div>
                 </li>
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik2.png" alt="">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy">KØB</a>
                     </div>
                 </li>
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik1.png" alt="">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy">KØB</a>
                     </div>
                 </li>
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik2.png" alt="">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy">KØB</a>
                     </div>
                 </li>
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik1.png" alt="">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy">KØB</a>
                     </div>
                 </li>
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik2.png" alt="">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy">KØB</a>
                     </div>
                 </li>
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik2.png" alt="">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy">KØB</a>
                     </div>
                 </li>
                 <li class="webshop__items">
                     <img class="webshop__image" src="images/keramik1.png" alt="">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <div class="webshop__hover">
                         <a href="#" class="webshop__buy">KØB</a>
                     </div>
                 </li>
             </ul>
         </section>
         
         
         <!--
         
         <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
             <p>info about the product</p>
        </div>
         -->

         
     </section>

     <!--
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            document.body.style.backgroundColor = "white";
    }
    </script>
-->

     <script src="js/filter.js"></script>

     <!-- Ionicons -->
     <script src="https://unpkg.com/ionicons@4.1.1/dist/ionicons.js"></script>
     
</body>
</html>
