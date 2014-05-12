<?php
@include_once 'init.php';
include_once ROOT_DIR . '/entidades/carrera.php';
include_once ROOT_DIR . '/entidades/institucion.php';
include_once ROOT_DIR . '/servicios/servicios.php';

$idCarrera = $_GET['id'];
$servicios = new Servicios();
$oCarrera = $servicios->getCarreraById($idCarrera);
$oInstitucion=$servicios->getInstitucionById($oCarrera->getIdInstitucion());
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
            <div id="header">
                <a href="index.html"><img id="logo" src="images/logo.png"/></a>
                <div id="buscador">
                    <form action="" method="get">
                        <input type="text" placeholder="Buscar..."/>
                    </form>
                </div>
            </div>
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
                    <img id="logo-inst" src="http://placehold.it/90x90&text=logo"/>
                    <div id="datos-inst">
                        <h1><?php echo $oCarrera->getNombre();?></h1>
                        <h3><?php echo $oInstitucion->getNombre();?></h3>
                    </div>


                    <div id="cuerpo"><h2>DESCRIPCION</h2>
                        <p> 
                        <?php 
                        echo $oCarrera->getDescripcion();
                        ?>
                        </p>
                        <h2> INCUMBENCIAS</h2>
                        <p>
                        <?php
                        echo $oCarrera->getIncumbencias();
                        ?>
                        </p>
                        <h2>PLAN DE ESTUDIO</h2>
                        <a href="<?php $oCarrera->getPlanEstudio();?>"> Plan de estudio</a>                     
                    </div>
                </div>
                <div id="publicidades">
                    publicidad
                </div>

            </div>
            <div id="footer">
            </div>
        </div>
    </body>
</html>
