        
</div>  <!-- END of SLIDEBAR CONTENT WRAPPER -->        

<!-- jQuery -->
<script src="./wedding_files/js/jquery-1.11.1.min.js"></script>
<!-- Pace -->
<script src="./wedding_files/js/pace.min.js"></script> 
<!-- Bootstrap -->
<script src="./wedding_files/js/bootstrap.js"></script>    
<!-- Modernizr -->
<script src="./wedding_files/js/modernizr.js"></script>  
<!-- Device JS -->
<script src="./wedding_files/js/device.js"></script>  
<!-- TinyNav -->
<script src="./wedding_files/js/tinynav.min.js"></script>
<!-- SmoothScroll -->
<script src="./wedding_files/js/jquery.smooth-scroll.js"></script>
<!-- Flexslider -->
<script src="./wedding_files/js/jquery.flexslider.js"></script>  
<!-- Sticky -->
<script src="./wedding_files/js/jquery.sticky.js"></script>  
<!-- Waypoint -->
<script src="./wedding_files/js/jquery.waypoints.min.js"></script>
<!-- DoubleTapToGo -->
<script src="./wedding_files/js/jquery.ui.widget.js"></script>
<script src="./wedding_files/js/jquery.dcd.doubletaptogo.js"></script>
<!-- Vide -->
<script src="./wedding_files/js/jquery.vide.js"></script>
<!-- Stellar -->
<script src="./wedding_files/js/jquery.stellar.js"></script>
<!-- Masonry -->
<script src="./wedding_files/js/masonry.pkgd.min.js"></script>
<!-- Countdown -->
<script src="./wedding_files/js/jquery.plugin.js"></script>
<script src="./wedding_files/js/jquery.countdown.js"></script>
<!-- Countdown Labels / Localisation -->
<script src="./wedding_files/js/jquery.countdown-custom-label.js"></script>
<!-- Magnific Popup -->
<script src="./wedding_files/js/jquery.magnific-popup.js"></script>
<!-- Owl Carousel -->
<script src="./wedding_files/js/owl.carousel.js"></script>
<!-- Slidebars -->
<script src="./wedding_files/js/slidebars.js"></script> 

<!-- Custom Core Script -->
<script type="text/javascript" src="./wedding_files/js/script.js"></script>        
<!-- Custom Additional Script -->
<script type="text/javascript" src="./wedding_files/js/main-slider-fade.js"></script>
<script type="text/javascript" src="./wedding_files/js/side-navbar.js"></script>


<?php if ($home) { ?>
    <script>
        var audioElm = document.getElementById('audioID');
        audioElm.volume = 0.2;
    </script>

<?php } ?>

<?php if ($rsvp) { ?>
    <script>
        $('#codigoModal').modal('show');
    </script>

<?php } else { ?>
    <script>
        $('#codigoModal').modal('hide');   
    </script>
<?php } ?>
    
    <script>
       
        $( "#events-radio-si" ).on( "click", function() {
            $("#numero-personas").show();
            $("#boton-enviar").show();
            
          });
          $( "#events-radio-no" ).on( "click", function() {
            $("#numero-personas").hide();
            $("#boton-enviar").show();
          });

    </script>
</body>


</html>