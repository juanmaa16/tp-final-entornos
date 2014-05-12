<?php
@include_once 'init.php';
include_once ROOT_DIR . '/entidades/institucion.php';
include_once ROOT_DIR . '/servicios/servicios.php';
include disenio.php;

$idInstitucion=$_GET['id'];
$servicios=new Servicios();
$oInstitucion=$servicios->getInstitucionById($idInstitucion);
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
    </head>
    <body>
        <div id="contenedor">
             <?php cabecera(); ?>
            <div id="principal">
                <div id="menu">
                    <ul id="css3menu1" class="topmenu">
                        <li class="topfirst"><a href="index.html" style="width:179px;height:28px;line-height:28px;"><img src="images/home-home-icone-9323-128-as.png" alt=""/>&nbsp</a></li>
                        <li class="topmenu"><a href="carreras.php" style="width:179px;height:28px;line-height:28px;"><span>CARRERAS</span></a></li>
                        <li class="topmenu"><a href="instituciones.php" style="width:178px;height:28px;line-height:28px;">INSTITUCIONES</a></li>
                        <li class="topmenu"><a href="areas_int.php" style="width:178px;height:28px;line-height:28px;">AREAS DE INTERES</a></li>
                        <li class="toplast"><a href="contacto.html" style="width:179px;height:28px;line-height:28px;">CONTACTO</a></li>
                    </ul>
                </div>
                <div id="contenido">
                    <img id="logo-inst" src="<?php echo $oInstitucion->getLogo();?>"/>
                    <div id="datos-inst">
                        <h1 style="text-transform:uppercase;"> <?php echo $oInstitucion->getNombre();?> </h1>
                        <p> 
                        <?php $oInstitucion->getDescripcion();?>
                        </p>
                        
                        <!--Mapa-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.868502947651!2d-60.64371600000001!3d-32.954481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab11d0eb49c3%3A0x11f1d3d54f950dd0!2sUTN+-+FACULTAD+REGIONAL+ROSARIO!5e0!3m2!1ses-419!2sar!4v1396537020835" width="615" height="200" frameborder="0" style="border:0"></iframe>
                        <!--Fin de mapa--> 
                        <h2>CARRERAS</h2>
                        <?php ?>
                        <ul>
                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        
                        </ul>
                        <h2>TELEFONO</h2>
                         <p> 
                        <?php echo $oInstitucion->getTelefono();?>
                        </p>
                        <h2>EMAIL</h2>
                         <p> 
                        <?php echo $oInstitucion->getEmail();?>
                        </p>
                        <h2>WEB</h2>
                         <p> 
                        <?php echo $oInstitucion->getWeb();?>
                        </p>
                        
                    </div>
                </div>
                <div id="publicidades">
                    gfhfjfj
                </div>

            </div>
             <?php pie(); ?>
        </div>
    </body>
</html>
