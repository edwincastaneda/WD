<?php include "header.php"; ?>
<?php
$home = false;
$error=false;
if (isset($_POST['codigo'])) {

    // archivo de texto
    
    require_once 'google/google-spreadsheet-to-array.php';
    $key = "1M3WafwxMNnvgCT0JIRFhzH_ujmPoSJclCLabDmbTo2U";
    $arreglo = google_spreadsheet_to_array($key);

    
    
    $rsvp_flag=true;
    $count = -1;
    
    foreach ($arreglo as $k => $v) {
        $count++;
        $a = ""; // FAMILIA
        $b = ""; // CANTIDAD ADULTOS
        $c = ""; // CANTIDAD NIÑOS
        $d = ""; // TOTAL
        $f = ""; // CODIGO RSVP
        $g = ""; // RESERVADOS ADULTOS
        $h = ""; // RESERVADOS NIÑOS

        if (isset($v['A'])) {
            $a = $v['A'];
        }
        if (isset($v['B'])) {
            $b = $v['B'];
        }
        if (isset($v['C'])) {
            $c = $v['C'];
        }
        if (isset($v['D'])) {
            $d = $v['D'];
        }
        if (isset($v['F'])) {
            $f = $v['F'];
        }
        if (isset($v['G'])) {
            $g = $v['G'];
        }
        if (isset($v['H'])) {
            $h = $v['H'];
        }


        
        if ($_POST['codigo'] == $f) {
            $rsvp_flag = false;
            $nombre=$a;
            $codigo_rsvp=$f;
            $adultos=$b;
            $ninos=$c;
            $total=$d;

            
            // GENERO EL ARCHIVO DE TEXTO
           // $saveFile = fopen("registros/".$f.".txt", "w") or die("Unable to open file!");
           // fwrite($saveFile, var_export(array("total_adultos"=>$g,"total_ninos"=>$h), true));
            
            
        } else { //codigo erroneo
            $error=true;
        }
        
        $openFile= array();
        $openFile = fopen("registros/".$_POST['codigo'].".txt", "w") or die("Unable to open file!");
        
        if($_POST['codigo']==$openFile['codigo_rsvp']){
            echo "clavo";
        }
        // SI YA EXISTE
    }
    
    
    $rsvp = $rsvp_flag;
    
} else {
    $rsvp = true;
}
?>
<!-- Modal -->
<div class="modal fade" id="codigoModal" tabindex="-1" role="dialog" aria-labelledby="codigoModalLabel" data-backdrop="static" data-keyboard="false" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="rsvp.php">
                <div class="modal-body"> 
                    <?php if($error){ ?>
                    <div class="alert alert-warning" role="alert">
                        <strong>Advertencia: </strong>El codigo de invitación que validaste no existe!<br/>
                        Puedes consultar tu invitación para obtener el código correcto.
                    </div>
                    <?php }else{ ?>
                    <h3>Hola!</h3>
                    Ingresa el codigo que esta en tu invitación para cargar la información de tu invitacion en el formulario de envio de rsvp.
                    <br/>
                    <br/>
                    <?php } ?>
                   
                   <div class="form-group">
                       <center>
                        <label for="codigo">CODIGO DE INVITACION</label>
                        <input type="text" maxlength="4" class="form-control ajax-input" style="text-transform: uppercase; width: 100px; text-align: center; font-size: 20px;" name="codigo" required="true" placeholder="****">
                       </center>
                        </div>
                    
                </div>

                <div class="modal-footer">
                    <input type="submit"  onclick="window.location='./';"  class="button medium" style="margin-top: 0px;" value="CANCELAR"/>
                    <input type="submit" id="submitButton"  name="submitButton" class="button medium reverse" value="VALIDAR CODIGO" style="margin-top: 0px;">
                   
                </div>
            </form>
        </div>
    </div>
</div>


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
                                    <h1>RSVP</h1>

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
                        <h3 style="margin-top:3px;">Gracias por confirmar tu participación antes del 9 de Abril</h3>  
                        <p><strong>Instrucciones:</strong>
                        <p>Confirma si podrás asistir al evento</p>
                        <p>Selecciona la cantidad de invitados a confirmar, de acuerdo a la cantidad de personas numeradas en tu tarjeta.</p>
                        <p>Envia tu rsvp</p>
                    </div>
                    
                    <div class="col-md-5">
                        <div class="rsvp-wrapper">
                                                    
                            <form method="post" action="update.php">
                            <div class="form-group">
                                <label for="nombre">NOMBRE EN INVITACION</label>
                                <input type="text" class="form-control ajax-input" id="nombre" value="<?php if(isset($nombre)){echo $nombre;} ?>" disabled>
                            </div>
                            
                            <div class="form-group">
                                <label for="codigo_rsvp">CODIGO RSVP</label>
                                <input type="text" class="form-control ajax-input" id="codigo_rsvp" value="<?php if(isset($codigo_rsvp)){echo $codigo_rsvp;} ?>" disabled>
                            </div>   
                            
                            <div class="form-group">
                                <label>ASISTIRA AL EVENTO?</label>
                                <div class="ajax-input ajax-radio">
                                    <div data-toggle="buttons">
                                        <label class="btn btn-primary no-icon" id="events-radio-si">
                                            <input type="radio" value="true"/> Si, ahi estare!
                                        </label>
                                        <label class="btn btn-primary no-icon" id="events-radio-no">
                                            <input type="radio" value="false"/> No podre<?php if($total>1){ echo "mos";} ?> asistir
                                        </label>
                                    </div>
                                </div> 
                            </div> 
                            
                            <div id="numero-personas" style="display:none;">
                            <div class="form-group cantidad_personas">
                                <label>NUMERO DE ADULTOS</label>
                                <div id="guest-radio" class="ajax-input ajax-radio">
                                    <div data-toggle="buttons">
                                        <?php for($i=1; $i<=$adultos; $i++){?>
                                        <label class="btn btn-primary no-icon">
                                            <input type="radio" name="adultos" id="<?php echo $i;?>" value="<?php echo $i;?>"> <?php echo $i;?>
                                        </label>
                                        <?php }?>
                                    </div>
                                </div> 
                            </div>
                            <?php if($ninos>0){ ?>
                            <div class="form-group cantidad_personas">
                                <label>NUMERO DE NIÑOS</label>
                                <div id="guest-radio" class="ajax-input ajax-radio">
                                    <div data-toggle="buttons">
                                        <?php for($i=1; $i<=$ninos; $i++){?>
                                        <label class="btn btn-primary no-icon">
                                            <input type="radio" name="adultos" id="<?php echo $i;?>" value="<?php echo $i;?>"> <?php echo $i;?>
                                        </label>
                                        <?php }?>
                                    </div>
                                </div> 
                            </div>
                            <?php } ?>
                            </div>
                            <div class="form-group" id="boton-enviar" style="display:none;">
                                <input type="submit"  name="enviar" class="button medium reverse" value="ENVIAR MI RSVP">
                            </div> 
                            </form>
                        </div>
                    </div>
                </div><!--END of TEXT SECTION-->


            </form>
        </div><!-- END of CONTAINER -->    

    </section> <!--END of CONTENT SECTION-->        

<?php include "footer.php"; ?>
