<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <meta name="description" content="">
        <meta name="keywords" content="" />
        <meta name="author" content="404">
		<link rel="shortcut icon" href="assets/img/icon/favicon.png">
        <title>Taarangana'18</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/slick.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet">
        <link href="assets/css/jquery.fullpage.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/loader.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
		<script src="assets/js/aframe-master.js"></script>
		<script src="assets/js/play-all-model-animations.js"></script>		
        </head>
<body onload="myFunction()">
	<!--loader-->
	<div class="preload">
    <div id="preloader" class="noselect">
        <div class="preloader">			
			<div class="preloader-top">
				<img src="assets/img/icon/loader.png">				
			</div>
			  
			 <div class="spinner">
				  <div class="bounce1"></div>
				  <div class="bounce2"></div>
				  <div class="bounce3"></div>
				</div>
				
			  <div class="preloader-bottom">
					<p>The days we'll wish lasted forever...<p>					
			  </div>			  
			</div>           
		</div>
	</div>	
	<!--audio-->
	<audio src="music.mp3">
    Your browser does not support the <code>audio</code> tag
	</audio>
<div id="snackbar">Scroll around the screen to explore more</div> 
		<!--navbar-->
		<div class="navbar navbar-fixed-top navbar-brand">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="hamburger " type="button" data-toggle="navigation" style="background-color:#ffff00;border-radius:20%;">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>                   
                </div>
            </div>
        </div>   
		
		
		<div class="menu-backdrop"></div>
        <div id="menu">
            <button class="hamburger" type="button" data-toggle="navigation">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <div class="menu-wrap">
                <div class="menu-nav">
                    <div class="left-middle">                        
                        <ul class="nav">
                            <li class="first"><a href="/"><span>Home</span></a></li>							
							<li><a href="about-fest/"><span>AboutUs</span></a></li>
							<li><a href="about-clg/"><span>Venue</span></a></li>
							<li><a href="events/"><span>Events</span></a></li>
							<li><a href="schedule/"><span>Schedule</span></a></li>
							<li><a href="pronight/"><span>Pronight</span></a></li>							
							<li><a href="gallery/"><span>Gallery</span></a></li>
							<li><a href="sponsors/"><span>Sponsors</span></a></li>
							<li class="last"><a href="meet-team/"><span>Meet the Team</span></a></li>
                        </ul>
                    </div> 
                </div>
				
                <div class="menu-text">
                    <div class="center-middle">
                        <div class="menu-text-inner">
                            <div class="menu-logo">TAARANGANA '18</div>
                            <div class="menu-event">
                                <div class="group">
                              <div class="date"><h2>The Sentinel Saga</h2>2 - 3 February 2018</div>								
                                </div>
                                <div class="contact">
									<a id="fb" target="_blank" href="https://www.facebook.com/taarangana/"><img src="assets/img/icon/facebook.png" class="social-icon"></a>
									<a id="twi" target="_blank" href=" https://twitter.com/_taarangana"><img src="assets/img/icon/twitter.png" class="social-icon"></a>                        
									<a id="insta" target="_blank" href="https://www.instagram.com/taarangana/"><img src="assets/img/icon/insta.png" class="social-icon"></a>
									<a id="utube" target="_blank" href="https://www.youtube.com/channel/UC_qCTCCcOK8eFATY791zCnw"><img src="assets/img/icon/utube.png" class="social-icon"></a>
								</div>
                                <p style="text-transform:none; font-weight: bold; font-family:'andale_mono'; font-size:16px;color:#042a3b;">
                                Contact us at <a href="mailto:website_team@taarangana.com" style="color:#fa2e70;">website_team@taarangana.com</a> </p>
								<button type="button" class="btn btn-info btn-signup"><span>Get your Entry Paas</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
        
		<!--homepage-->
		<div class="title-home"><h1>Taarangana '18</h1><h5>The Sentinel Saga</h5></div>
		<a-scene  vr-mode-ui="enabled: false">
        <a-assets>
        <a-asset-item id="cityModel" src="https://cdn.aframe.io/test-models/models/glTF-2.0/virtualcity/VC.gltf"></a-asset-item>
      </a-assets>
	  
	  <a-entity position="-7.854 4.847 6.574" camera wasd-controls look-controls rotation="-10.026761414789481 -15.527156248045387 1.3178029288008934" ></a-entity>
	  <a-entity scale="1 1 1" id="model">
		<a-image src="assets/img/hoarding1.jpg" position="4.374 3.141 15.408" scale="1.2 5 1"></a-image>
		<a-image src="assets/img/h1.png" position="-2.489 2.485 0.845" scale="0.8 4 1"></a-image>
		<a-image src="assets/img/h2.png" position="-6.497 3.557 1.94" scale="1 6 1"></a-image>
		<a-image src="assets/img/h3.png" position="-10.416 2.467 0.98" scale="0.8 4 1"></a-image>
		<!--<a-entity position="0.082 0.567 0.431">
		<a-entity position="0 1.4 -1.5" text="align:center;color:#fff;font:https://raw.githubusercontent.com/etiennepinchon/aframe-fonts/master/fonts/crimsontext/CrimsonText-Bold.json;shader:msdf;value:TAARANGANA'18;width:10"></a-entity>
		<a-entity position="0 1.1 -1.5" text="align:center;color:#fff;font:https://raw.githubusercontent.com/etiennepinchon/aframe-fonts/master/fonts/crimsontext/CrimsonText-BoldItalic.json;shader:msdf;value:The Sentinel Saga;width:7"></a-entity>
		</a-entity>
		</a-entity>-->
      <a-entity gltf-model="#cityModel" play-all-model-animations></a-entity>
    </a-scene>
	
	<!--footer-->
        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.fullpage.js"></script>
        <script src="assets/js/mgGlitch.min.js"></script>
        <script src="assets/js/iscroll.js"></script>
        <script src="assets/js/validator.min.js"></script>
        <script src="assets/js/cookie.min.js"></script>
        <script src="assets/js/script.js"></script>   
		
		 <script type="text/javascript">
			function myFunction() {
				setTimeout(function(){
					document.getElementById("preloader").style.display = "none";
					document.querySelector("audio").play();
					document.getElementById("snackbar").style.visibility= "visible";
					setTimeout(function(){ document.getElementById("snackbar").style.visibility= "hidden";}, 5500);
			}, 5000);
			}
			
			if(jQuery(window).width()<900){
				document.querySelector('a-entity#camera').removeAttribute('look-controls');
				document.querySelector('a-entity#model').setAttribute('scale','0.7 0.7 0.7');
			}
			else if (jQuery(window).width()>900){
				document.querySelector('a-entity#camera').setAttribute('look-controls',"");
				document.querySelector('a-entity#model').setAttribute('scale','1 1 1');
			}
			jQuery(window).resize(function () {
			  if(jQuery(window).width()<900){
				document.querySelector('a-entity#camera').removeAttribute('look-controls');
				document.querySelector('a-entity#model').setAttribute('scale','0.7 0.7 0.7');
			}
			else if (jQuery(window).width()>900){
				document.querySelector('a-entity#camera').setAttribute('look-controls',"");
				document.querySelector('a-entity#model').setAttribute('scale','1 1 1');
			}
			})
		</script>
		</body>
</html>


                        
     