<?php

	$var='	<footer class="section fp-auto-height">                
                <div class="container">
					<div class="lead">Get ready for the <span class="text-semi">ultimate Experience</span></div>
                    
                    <div class="contact">
                        <span>Follow us: </span>
						 <a id="fb" target="_blank" href="https://www.facebook.com/taarangana/"><img src="../assets/img/icon/facebook.png" class="social-icon"></a>
									<a id="twi" target="_blank" href=" https://twitter.com/_taarangana"><img src="../assets/img/icon/twitter.png" class="social-icon"></a>                        
									<a id="insta" target="_blank" href="https://www.instagram.com/taarangana/"><img src="../assets/img/icon/insta.png" class="social-icon"></a>
									<a id="utube" target="_blank" href="https://www.youtube.com/channel/UC_qCTCCcOK8eFATY791zCnw"><img src="../assets/img/icon/utube.png" class="social-icon"></a>
									<br>
                        <a href="../#" class="contact-us">Contact us</a><br><br>
						<button type="button" class="btn btn-info btn-signup"><span>Get your Entry Paas</span></button>
                    </div>
                    <div class="about-contact visible-xs"><a href="../#" class="contact-us-xs">Contact us</a></div> 
					<?php
$my_img = imagecreate( 200, 80 );
$background = imagecolorallocate( $my_img, 0, 0, 255 );
$text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
$line_colour = imagecolorallocate( $my_img, 128, 255, 0 );
imagestring( $my_img, 4, 30, 25, "thesitewizard.com", $text_colour );
imagesetthickness ( $my_img, 5 );
imageline( $my_img, 30, 45, 165, 45, $line_colour );

header( "Content-type: image/png" );
imagepng( $my_img );
imagecolordeallocate( $line_color );
imagecolordeallocate( $text_color );
imagecolordeallocate( $background );
imagedestroy( $my_img );
?>
<img src="<?php echo $my_img; ?>" alt="Image created by a PHP script" width="200" height="80">
                </div>
                <div class="footer-contact">
                    <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                    <div class="center-middle">
                        <div class="container">
                            <address>Indira Gandhi Delhi Technical University for Women<br><small>Kashmere Gate, Opp. St. James Church, New Delhi, Delhi 110006</small></address>
                            <div class="email">&lt;Email: <a href="mailto:website_team@taarangana.com">website_team@taarangana.com</a>&gt;</div>
                        </div>
                    </div>
                </div>
            </footer>           

                
        

        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/fastclick.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/jquery.fullpage.js"></script>
        <script src="../assets/js/mgGlitch.min.js"></script>
        <script src="../assets/js/iscroll.js"></script>
        <script src="../assets/js/validator.min.js"></script>
        <script src="../assets/js/cookie.min.js"></script>
        <script src="../assets/js/script.js"></script>
		<script src="../assets/js/jquery.matchHeight.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;key=AIzaSyCHnYfFsRTtW9ZuoghwV5dYGXcWebwYJMQ"></script>';
	echo  $var;
?>
