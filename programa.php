<?php include "header.php"; ?>
<?php
$home = true;
$rsvp = false;
require_once 'google/google-spreadsheet-to-array.php';
$key = "1FZOqOfE7IplYtRSILNJaTl6sxEoiK44A1lQO6GFVDlY";
$arreglo = google_spreadsheet_to_array($key);
$count = -1;
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
                <a href="#" class="sb-toggle-right" style="COLOR: #EF384C;FONT-WEIGHT: BOLD;FONT-SIZE: 30PX;">
                    MENU
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
                                    <h2>Programa general de nuestra boda</h2>
                                    <p>
                                        texto del programa
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
            <div data-stellar-ratio="0.5" class="slide-image" style="background-image:url('wedding_files/slides/7.jpg'); background-position:top;">
            </div>

            <div class="slide-overlay" style="opacity:0.2"> </div> 
        </div>	<!-- END of MAIN SLIDER IMAGES -->

    </section><!-- ENF of MAIN SLIDER -->



    <!--CONTENT SECTION-->
    <section id="content">

        <!-- ICON -->
        <div class="icon-title">
            <div class="de-icon circle light large-size aligncenter">
                <i class="de-icon-doc"></i>
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
                    <div class="col-md-offset-1 col-md-12">
                        <h2 style="margin-top:3px;">BODA EDWIN Y DEBORAH</h2>  
                        <?php
                        foreach ($arreglo as $k => $v) {

                            $count++;

                            if ($count > 0) {
                                if (isset($v['A'])) {
                                    ?>

                                    <h3 style="margin-left:2em"><?php echo $v['A']; ?></h3>

                                <?php }
                                if (isset($v['B'])) {
                                    ?>

                                    <h4 style="margin-left:5em"><?php echo $v['B']; ?></h4>

                                <?php
                                }
                                if (isset($v['C'])) {
                                    ?>

                                    <h5 style="margin-left:7em"><?php echo $v['C']; ?></h5>

                                <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div><!--END of TEXT SECTION-->


            </form>
        </div><!-- END of CONTAINER -->    

    </section> <!--END of CONTENT SECTION-->        

<?php include "footer.php"; ?>
