<!DOCTYPE html>
<html>
  <head>
	<title>About | Taarangana'18</title>
	<?php include('../module/head.php') ?>
    <script src="aframe-master.js"></script>
  </head>
  <body class="bg">
  <?php include('../module/navbar.php') ?>
  <?php include('../module/form.php') ?>
    <a-scene vr-mode-ui="enabled: false">
      <a-assets>
        <a-mixin id="board" geometry="depth: .05; height: 1.5; width: 20" material="shader: flat"
                 pivot="0 0.5 0" position="0 -1.5 0"></a-mixin>
        <a-mixin id="unhinge" attribute="rotation" to="0 0 0" dur="1000" fill="both"></a-mixin>
        <img id="shadow" src="radial-shadow-2.png">
      </a-assets>
		<a-entity position="0 1.6 0" camera="userHeight:1.6"></a-entity>
      <!-- Series of nested boards that unfold one by one. -->
      <a-entity position="0 0 -7" scale="1 1 1" id="model">
        <!-- Animate rotation and position of group for extra visual flair. -->
        <a-animation attribute="position" to="0 8 -7" dur="2000"></a-animation>
        <a-animation attribute="rotation" from="0 60 0" to="0 0 0" dur="2500"></a-animation>

        <!-- Pivot and position are used to set the "hinge" of each board to it's top edge. -->
        <a-box mixin="board" id="board" src="3.jpg">
		
		<a-text id="text1" value="All the strings have been pulled right, and the engine has been set into motion"  position="0 -0.4 0.03" align="center" color="#000" shader="msdf" font="https://raw.githubusercontent.com/etiennepinchon/aframe-fonts/master/fonts/berkshireswash/BerkshireSwash-Regular.json" ></a-text>		 
          <a-animation mixin="unhinge" from="-20 0 0" delay="1000"></a-animation>

          <a-box mixin="board" id="board" src="2.jpg">		  
		  <a-text id="text2" value="Taarangana is back with its fifth edition"  position="0 -0.7 0.03" align="center" color="#000" shader="msdf" font="https://raw.githubusercontent.com/etiennepinchon/aframe-fonts/master/fonts/crimsontext/CrimsonText-Regular.json"></a-text>		  
            <a-animation mixin="unhinge" from="-175 0 0" delay="250"></a-animation>

            <a-box mixin="board" id="board" src="1.jpg">
			<a-text id="text3" value="Taarangana'18"  position="0 -1 0.03" align="center" color="#663300" shader="msdf" font="https://raw.githubusercontent.com/etiennepinchon/aframe-fonts/master/fonts/giveyouglory/GiveYouGlory.json"></a-text>
              <a-animation mixin="unhinge" from="-180 0 0" delay="500"></a-animation>

              <a-box mixin="board" id="board" src="2.jpg">
			  <a-text id="text4" value="Taarangana is the Annual Cultural Festival of Indira Gandhi Delhi Technical University for Women, Kashmere Gate, Delhi"  position="0 -0.2 0.03" align="center" color="#000" shader="msdf" font="https://raw.githubusercontent.com/etiennepinchon/aframe-fonts/master/fonts/miltoniantattoo/MiltonianTattoo-Regular.json"></a-text>
			  
                <a-animation mixin="unhinge" from="-180 0 0" delay="750"></a-animation>

                <a-box mixin="board" id="board" src="3.jpg">
				<a-text id="text5" value="Spread over a span of two days, that aims at becoming a seamless medium for students of colleges, to connect and bond over like-minded interests and events"  position="0 -0.2 0.03" align="center" color="#000" shader="msdf" font="https://raw.githubusercontent.com/etiennepinchon/aframe-fonts/master/fonts/berkshireswash/BerkshireSwash-Regular.json"></a-text>
                <a-animation mixin="unhinge" from="-180 0 0" delay="1000"></a-animation>
          </a-box>
        </a-box></a-box></a-box></a-box>
      </a-entity>

      <a-image position="0 -1 0" src="#shadow" rotation="-90 0 0" scale="6 6 6"></a-image>
      <a-sky src="..\assets\img\bg.jpg"></a-sky>
      <a-light type="directional" color="#fff" intensity="0.2" position="-1 2 1"></a-light>
      <a-light type="ambient" color="#fff"></a-light>
    </a-scene>
	<?php include('../module/footer.php') ?>
  <script type="text/javascript">
			if(jQuery(window).width()<900){
				document.querySelector('a-text#text1').setAttribute('width','6');
				document.querySelector('a-text#text1').setAttribute('wrap-count','35');
				document.querySelector('a-text#text2').setAttribute('width','6');
				document.querySelector('a-text#text2').setAttribute('wrap-count','25');
				document.querySelector('a-text#text3').setAttribute('width','6');
				document.querySelector('a-text#text3').setAttribute('wrap-count','15');
				document.querySelector('a-text#text4').setAttribute('width','6');
				document.querySelector('a-text#text4').setAttribute('wrap-count','40');
				document.querySelector('a-text#text5').setAttribute('width','6');
				document.querySelector('a-text#text5').setAttribute('wrap-count','40');
			}
			else if (jQuery(window).width()>900){
				document.querySelector('a-text#text1').setAttribute('width','22');
				document.querySelector('a-text#text1').setAttribute('wrap-count','75');
				document.querySelector('a-text#text2').setAttribute('width','22');
				document.querySelector('a-text#text2').setAttribute('wrap-count','40');
				document.querySelector('a-text#text3').setAttribute('width','22');
				document.querySelector('a-text#text3').setAttribute('wrap-count','30');
				document.querySelector('a-text#text4').setAttribute('width','20');
				document.querySelector('a-text#text4').setAttribute('wrap-count','90');
				document.querySelector('a-text#text5').setAttribute('width','20');
				document.querySelector('a-text#text5').setAttribute('wrap-count','90');
			}
			jQuery(window).resize(function () {
			  if(jQuery(window).width()<900){
				document.querySelector('a-text#text1').setAttribute('width','6');
				document.querySelector('a-text#text1').setAttribute('wrap-count','35');
				document.querySelector('a-text#text2').setAttribute('width','6');
				document.querySelector('a-text#text2').setAttribute('wrap-count','25');
				document.querySelector('a-text#text3').setAttribute('width','6');
				document.querySelector('a-text#text3').setAttribute('wrap-count','15');
				document.querySelector('a-text#text4').setAttribute('width','6');
				document.querySelector('a-text#text4').setAttribute('wrap-count','40');
				document.querySelector('a-text#text5').setAttribute('width','6');
				document.querySelector('a-text#text5').setAttribute('wrap-count','40');
			}
			else if (jQuery(window).width()>900){
				document.querySelector('a-text#text1').setAttribute('width','22');
				document.querySelector('a-text#text1').setAttribute('wrap-count','75');
				document.querySelector('a-text#text2').setAttribute('width','22');
				document.querySelector('a-text#text2').setAttribute('wrap-count','40');
				document.querySelector('a-text#text3').setAttribute('width','22');
				document.querySelector('a-text#text3').setAttribute('wrap-count','30');
				document.querySelector('a-text#text4').setAttribute('width','20');
				document.querySelector('a-text#text4').setAttribute('wrap-count','90');
				document.querySelector('a-text#text5').setAttribute('width','20');
				document.querySelector('a-text#text5').setAttribute('wrap-count','90');
			}
			})
</script>
</body>
</html>