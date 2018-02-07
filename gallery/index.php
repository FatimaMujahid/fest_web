<!DOCTYPE html>
<html>
  <head>
	<title>Gallery | Taarangana'18</title>
	<?php include('../module/head.php') ?>
    <script src="../assets/js/aframe.min.js"></script>
    <script src="../assets/js/aframe-orbit-controls-component.js"></script>
    <script src="../assets/js/aframe-look-at-component.min.js"></script>
  </head>
  <body class="bg">
  <?php include('../module/navbar.php') ?>
  <?php include('../module/form.php') ?>
        <a-scene vr-mode-ui="enabled: false">
	  
	<!--camera-->
                <a-entity id="camera" camera="fov:60" position="8 -2 4" rotation="-7 50 3" cursor="rayOrigin:mouse" orbit-controls="
				maxPolarAngle:3.142;
				target:#model;
				minDistance:18;
				maxDistance:35">
                </a-entity>		
				
		<a-entity id="model">
		
		<!--room-->
        <a-box position="8.4 0.5 0" height="12" side="back" material="side:back;color:#fff" scale="70 2 50">
		<a-plane src="../assets/img/gallery/w1.jpg" height="12" width="1" position="0 0 -0.48"></a-plane>
		<a-plane src="../assets/img/gallery/w2.jpg" height="12" width="1" position="0 0 0.498" rotation="0 180 0"></a-plane>
		<a-plane color="#000" height="12" width="1" position="0 5.97 0.498" rotation="90 0 0"></a-plane>
		<a-plane src="../assets/img/gallery/floor.png" position="0 -5.86 0.01" rotation="-90 0 0"></a-plane>
		</a-box>
        
		<!--images-->
		<a-image src="../assets/img/gallery/pic14.png" scale="15 15 3" position="-16.933 4.048 -22.99"></a-image>
		<a-image src="../assets/img/gallery/pic11.png" scale="12 12 3" position="-2.1 5.709 -23.54"></a-image>
		<a-image src="../assets/img/gallery/pic17.png" scale="13 13 3" position="12.042 5.209 -23.61"></a-image>
		<a-image src="../assets/img/gallery/pic15.png" scale="15 15 3" position="-16.035 0.302 23.656"></a-image>
		<a-image src="../assets/img/gallery/pic9.png" scale="14 14 3" position="-0.062 1.055 24.136"></a-image>
		<a-image src="../assets/img/gallery/pic16.png" scale="15 18 3" position="15.962 0.879 24.465"></a-image>
		<a-image src="../assets/img/gallery/pic7.jpg" scale="11 11 3" position="33.363 4.929 24.62"></a-image>
		<a-image src="../assets/img/gallery/pic8.png" scale="10 10 3" position="-25.516 6.903 18.59" rotation="0 90 0"></a-image>
		<a-image src="../assets/img/gallery/pic10.png" scale="10 11 3" position="-25.402 -4.403 11.027" rotation="0 90 0"></a-image>
		<a-image src="../assets/img/gallery/pic3.png" scale="10 10 3" position="-25.664 -3.475 -0.543" rotation="0 90 0"></a-image>
		<a-image src="../assets/img/gallery/pic6.png" scale="12 12 3" position="-25.37 5.676 -16.429" rotation="0 90 0"></a-image>
		<a-image src="../assets/img/gallery/pic4.jpg" scale="10 8 3" position="-25.37 -5.797 -12.219" rotation="0 90 0"></a-image>
		<a-image src="../assets/img/gallery/4.png" scale="17 8 3" position="-25.37 7.124 1.178" rotation="0 90 0"></a-image>
		<a-image src="../assets/img/gallery/2.png" scale="15 10 3" position="35.443 -5.565 24.752" rotation="0 180 0"></a-image>
		<a-image src="../assets/img/gallery/9.png" scale="22 9 3" position="4.92 -6.21 -23.37" ></a-image>
		<!--<a-image src="../assets/img/gallery/1.png" scale="40 30 3" position="12.147 12.117 2.562" rotation="90 180 0"></a-image>-->
		<a-image src="../assets/img/gallery/6.jpg" scale="70 50 3" position="12.147 12.117 2.562" rotation="90 180 0"></a-image>
		<a-image src="../assets/img/gallery/pic19.png" scale="48 23 3" position="39.748 0.471 0.811" rotation="0 90 0"></a-image>
		
		<!--animation: Rotation of Room-->
		<a-animation attribute="rotation" from="0 0 0" to="0 360 0" dur="50000" easing="linear" repeat="indefinite"></a-animation>
    </a-entity>
    </a-scene>
  <?php include('../module/footer.php') ?>
  </body>
</html>