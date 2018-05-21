<!doctype html>
<html>
	
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content="">

<link href="css/index.css" type="text/css" rel="stylesheet"> 
<link href="css/styles_header.css" type="text/css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500" rel="stylesheet">
	
<title>1000 TING | Jægergårdsgade 18-20, 8000 Århus C</title>
    
    
    
<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="animationflower.js"></script>
<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("5A5EED5A65E84215B7FD981C035AC289");
	var lib=comp.getLibrary();
	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
	loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
	var lib=comp.getLibrary();
	loader.loadManifest(lib.properties.manifest);
}
function handleFileLoad(evt, comp) {
	var images=comp.getImages();	
	if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }	
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	var queue = evt.target;
	var ssMetadata = lib.ssMetadata;
	for(i=0; i<ssMetadata.length; i++) {
		ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
	}
	exportRoot = new lib.animationflower();
	stage = new lib.Stage(canvas);	
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}	    
	//Code to support hidpi screens and responsive scaling.
	function makeResponsive(isResp, respDim, isScale, scaleType) {		
		var lastW, lastH, lastS=1;		
		window.addEventListener('resize', resizeCanvas);		
		resizeCanvas();		
		function resizeCanvas() {			
			var w = lib.properties.width, h = lib.properties.height;			
			var iw = window.innerWidth, ih=window.innerHeight;			
			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
			if(isResp) {                
				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
					sRatio = lastS;                
				}				
				else if(!isScale) {					
					if(iw<w || ih<h)						
						sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==1) {					
					sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==2) {					
					sRatio = Math.max(xRatio, yRatio);				
				}			
			}			
			canvas.width = w*pRatio*sRatio;			
			canvas.height = h*pRatio*sRatio;
			canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';				
			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
			stage.scaleX = pRatio*sRatio;			
			stage.scaleY = pRatio*sRatio;			
			lastW = iw; lastH = ih; lastS = sRatio;            
			stage.tickOnUpdate = false;            
			stage.update();            
			stage.tickOnUpdate = true;		
		}
	}
	makeResponsive(false,'both',false,1);	
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}
</script>
</head>
	
<body onload="init();">
	
	   <!-- HEADER INCLUDE -->
     <?php include "includes/header.php";?>

	<!---- VIDEO ---->
	
	<section class="video">
		<video></video>
	</section>
	
	<!---- PRODUCTS AND LINK TO WEBSHOP ---->		
		<section class="products">
			<p class="products__description">Alle vores produkter er enten nøje udvalgt, fremstillet af genbrugsmaterialer, håndlavede unikaer eller fra en helt anden etnisk kultur. Fælles for alt er, at det er produkter med en historie og en personlighed.</p>
		</section>
		
	<a href="#" class="webshoplink" >GÅ TIL WEBSHOP</a>

	
	
	<!---- OPENING HOURS ---->		
	<section class="openinghours">
		<h2 class="openinghours__h2" >Vi er mere end bare en butik!</h2>
		<h4 class="openinghours__h4" >Kom forbi og se for dig selv</h4>
		<p class="openinghours__p">Mandag-fredag: kl.10.00 - 17.30 <br>
		Lørdag: kl.10.00 - 14.00 · Søndag: lukket</p>
		<!--- <address>Jægergårdsgade 18-20, 8000 Århus C</address> -->
	</section>
    
    	
	
    <canvas id="canvas" width="700" height="400" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 1.00);"></canvas>
  
</body>
	
</html>