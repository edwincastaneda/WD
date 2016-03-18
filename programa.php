<?php include "header.php"; ?>
<?php
$home=true; 
$rsvp=false;
    require_once 'google/google-spreadsheet-to-array.php';
    $key = "1M3WafwxMNnvgCT0JIRFhzH_ujmPoSJclCLabDmbTo2U";
    $arreglo = google_spreadsheet_to_array($key);
  
?>


<!-- SLIDEBAR CONTENT WRAPPER -->
<div id="sb-site" style="min-height: 599px;">

    <!-- NAVIGATION -->
    <header>
        <nav id="menuicon-bar" class="fluid-width menuicon-right">

            <!-- LOGO -->
            <div class="logo-outter-wrapper">
                <div class="logo-wrapper">
                    <!-- CSS LOGO --> 
                    <a href="./">
                        <div class="css-logo rounded">
                            <div class="css-logo-text" style="font-size: 24px;padding-top: 12px;">
                                <strong><i class="de-icon-home"></i></strong>
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
    <section id="main-slider" class="fixed-height">      	

        <!-- MAIN SLIDER TITLE OUTTER WRAPPER -->
        <div class="slide-title-outter-wrapper">

            <!-- MAIN SLIDER TITLE INNER WRAPPER -->
            <div class="slide-title-inner-wrapper">

                <!-- TITLE 1  -->
                <div class="slide-title align-bottom">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8">                                     

                                <div class="page-title">
                                    <h1>PROGRAMA</h1>

                                    <div class="heart-divider">
                                        <span class="white-line"></span>
                                        <i class="de-icon-heart pink-heart"></i>
                                        <i class="de-icon-heart white-heart"></i>
                                        <span class="white-line"></span>
                                    </div>
                                    <h2>¡Bienvenido a la confirmación de participación de nuestra boda!</h2>
                                    <p>
                                        Gracias por tomarte el tiempo de confirmar tu participación, para nosotros es muy valiosa tu presencia y participación abajo encontrarás las instrucciones correspondientes.
                                    </p>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

            </div><!-- END of MAIN SLIDER TITLE INNER WRAPPER -->

        </div> <!-- END of MAIN SLIDER TITLE OUTTER WRAPPER -->

        <!-- MAIN SLIDER IMAGES -->            
        <div class="slides">
            <!-- SLIDE IMAGE -->
            <div data-stellar-ratio="0.5" class="slide-image" style="background-image:url('wedding_files/slides/4.jpg'); background-position:top;">
            </div>

            <div class="slide-overlay" style="opacity:0.2"> </div> 
        </div>	<!-- END of MAIN SLIDER IMAGES -->

    </section><!-- ENF of MAIN SLIDER -->



    <!--CONTENT SECTION-->
    <section id="content">

        <!-- ICON -->
        <div class="icon-title">
            <div class="de-icon circle light large-size aligncenter">
                <i class="de-icon-mail-2"></i>
            </div>
        </div>

        <!-- CONTAINER -->
        <div class="container">
            <form method="post" action="rsvp.php">
                <!--TEXT SECTION-->
                <div class="row">
                    <div id="message" class="col-md-offset-1 col-md-10 message">
                        <!-- Show Message -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-1 col-md-5">
                        <h3 style="margin-top:3px;">Gracias por confirmar tu participación antes del 11 de Abril</h3>  
                        <p><strong>Instrucciones:</strong>
                        <p>Confirma si podrás asistir al evento</p>
                        <p>Selecciona la cantidad de invitados a confirmar, de acuerdo a la cantidad de personas numeradas en tu tarjeta.</p>
                        <p>Envia tu rsvp</p>
                    </div>

                    <div class="col-md-5">
                       
                    </div>
                </div><!--END of TEXT SECTION-->


            </form>
        </div><!-- END of CONTAINER -->    

    </section> <!--END of CONTENT SECTION-->        

<?php include "footer.php"; ?>
