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
         <section id="main" class="webshop__products">
             <ul class="webshop__list">
                 <li class="webshop__items">
                     <img src="images/keramik1.png" width="60%" alt="">
                     <h2>Unika Keramik <br> 250DKK</h2>
                     <span style="cursor:pointer" onclick="openNav()">info</span>
                 </li>
                 <li class="webshop__items">
                     <img src="images/keramik2.png" width="60%" alt="">
                     <h2>Unika Keramik <br> 250DKK</h2>
                 </li>
                  <li class="webshop__items">
                     <img src="images/keramik2.png" width="60%" alt="">
                     <h2>Unika Keramik <br> 250DKK</h2>
                 </li>
                  <li class="webshop__items">
                     <img src="images/keramik2.png" width="60%" alt="">
                     <h2>Unika Keramik <br> 250DKK</h2>
                 </li>
                  <li class="webshop__items">
                     <img src="images/keramik2.png" width="60%" alt="">
                     <h2>Unika Keramik <br> 250DKK</h2>
                 </li>
             </ul>
         </section>
         
         <!--
         
         <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
             <p>info about the product</p>
        </div>
         -->
         
         <div class="container demo">
	
	<div class="text-center">
		<button type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal2">
			Right Sidebar Modal
		</button>
	</div>
	
	<!-- Modal -->
	<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel2">Right Sidebar</h4>
				</div>

				<div class="modal-body">
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</p>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->
	
	
</div><!-- container -->

         
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
