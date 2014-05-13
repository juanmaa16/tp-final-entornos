<?php
include 'disenio.php';
@include_once 'init.php';
include_once ROOT_DIR . '/entidades/carrera.php';
include_once ROOT_DIR . '/entidades/institucion.php';
include_once ROOT_DIR . '/servicios/servicios.php';

$idCarrera = $_GET['id'];
$servicios = new Servicios();
$oCarrera = $servicios->getCarreraById($idCarrera);
$oInstitucion = $servicios->getInstitucionById($oCarrera->getIdInstitucion());
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
                <?php menu(); ?>
                <div id="contenido">
                    <img id="logo-inst" src="http://placehold.it/90x90&text=logo"/>
                    <div id="datos-inst">
                        <h1><?php echo $oCarrera->getNombre(); ?></h1>
                        <h3><a href="institucion.php?id=<?php echo $oInstitucion->getId();?>"> <?php echo $oInstitucion->getNombre(); ?></a></h3>
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
                        <a href="<?php $oCarrera->getPlanEstudio(); ?>"> Plan de estudio</a>                     
                    </div>
                </div>
                <div id="publicidades">
                    publicidad
                </div>

            </div>
            <?php pie(); ?>
        </div>
    </body>
</html>
