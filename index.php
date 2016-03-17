<?php include "header.php"; ?>
<?php $home=true; $rsvp=false; ?>
    <!-- SLIDEBAR CONTENT WRAPPER -->
	<div id="sb-site" style="min-height: 599px;">
      
      	<!-- NAVIGATION -->
        <header>
        	<nav id="menuicon-bar" class="fluid-width menuicon-right">
            	
                <!-- LOGO -->
                <div class="logo-outter-wrapper">
            		<div class="logo-wrapper">
                		<!-- CSS LOGO --> 
                                <a href="rsvp.php">
                    		<div class="css-logo rounded">
                   				<div class="css-logo-text">
								<strong>RSVP</strong>
                    			</div>
                    		</div>
                        </a>
                   
                	</div>
                </div>
                <!-- END of LOGO -->
                        
				<!-- MENU ICON -->
				<div id="menu-icon" class="white">
					<a href="#" class="sb-toggle-right">
						<i class="de-icon-menu"></i>
					</a>
				</div>
                
                <!-- RESET FLOAT -->        
				<div class="clearboth"></div>
                
                <!-- STICKY MENU ICON -->
               	<div id="sticky-menuicon" style="display: none;">
                	<a href="#" class="sb-toggle-right">
                    	<i class="de-icon-menu"></i>
                    </a>
            	</div>
                
            </nav>
           
        </header><!-- END of NAVIGATION -->
        
      
       	<!-- MAIN SLIDER -->
    	<section id="main-slider" class="flexslider fullscreen" style="height: 599px;">      	
            
            <!-- MAIN SLIDER TITLE OUTTER WRAPPER -->
        	<div class="slide-title-outter-wrapper">
            	
            	<!-- MAIN SLIDER TITLE INNER WRAPPER -->
				<div class="slide-title-inner-wrapper">
                                
                    <!-- TITLE -->
					<div class="slide-title align-middle">
                    
                    	<div class="container">
                        	<div class="row">
                        		<div class="col-md-offset-3 col-md-6 animation delay1 fadeInUp animated" style="visibility: visible;">
                                    <div id="save-the-date">
										<div id="save">Save</div>
                                    	<div id="the-date">The Date</div>
                                    	<div id="date">- 23<span class="pink-dot">.</span>04<span class="pink-dot">.</span>16 -</div>
                                    </div>
                                    <div class="banner-text light medium" style="letter-spacing:3px">
                                    	<h4>*** WE ARE GETTING MARRIED ***</h4>
                                    </div>    
                                    <div class="heart-divider">
                                    	<span class="white-line" style="width:10px"></span>
                                        <i class="de-icon-heart pink-heart"></i>
                                        <i class="de-icon-heart white-heart"></i>
                                        <span class="white-line" style="width:10px"></span>
                                    </div>                        
								</div> 
								<div id="countdown" class="simple-countdown" style="visibility: visible;"></div>
                     
							</div>
						</div>
                        
					</div> 
                                
				</div><!-- END of MAIN SLIDER TITLE INNER WRAPPER -->
                
			</div> <!-- END of MAIN SLIDER TITLE OUTTER WRAPPER -->
                         
            <!-- MAIN SLIDER IMAGES -->
            
  			<ul class="slides">
            	
                
    			<li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                	<!-- SLIDE IMAGE -->
                	<div data-stellar-ratio="0.5" class="slide-image" style="top: 0px; display: block; background-image: url('wedding_files/slides/1.jpg');">
                    </div>
                    
                    <!-- SLIDE OVERLAY -->
                    <div class="slide-overlay" style="opacity:0.2"> </div> 
                                                      
    			</li>
                
                             
   				<li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      				<!-- SLIDE IMAGE -->
                    <div data-stellar-ratio="0.5" class="slide-image" style="top: 0px; display: block; background-image: url('wedding_files/slides/2.jpg');">
					</div>
                    
                    <!-- SLIDE OVERLAY -->
                    <div class="slide-overlay" style="opacity:0.2"> </div>
    			</li>
                
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
      				<!-- SLIDE IMAGE -->
                    <div data-stellar-ratio="0.5" class="slide-image" style="top: 0px; display: block; background-image: url('wedding_files/slides/3.jpg');">
					</div>
                    
                    <!-- SLIDE OVERLAY -->
                    <div class="slide-overlay" style="opacity:0.2"> </div>
    			</li>
                

				
            <!-- BACKGROUND MUSIC -->
            <div class="video-audio-control">
            	<a id="mute-audio" href="#" data-start="unmute" data-mute-icon="de-icon-volume-off" data-unmute-icon="de-icon-volume-up">
        			<div class="de-icon circle light outline very-small-size inline">
            			<i class="de-icon-volume-up"></i>
            		</div>
        		</a>
                
                <audio id="audioID" src="./wedding_files/audio/bjp.mp3" autoplay loop>
					Your browser does not support the audio element.
				</audio>
            </div>
            <!-- END oF BACKGROUND MUSIC -->
    			
  			</ul><!-- END of MAIN SLIDER IMAGES -->            
            
		<ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Anterior</a></li><li><a class="flex-next" href="#">Siguiente</a></li></ul></section><!-- ENF of MAIN SLIDER -->
       



<?php include 'footer.php'; ?>