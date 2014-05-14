<?php
@include_once 'init.php';
include_once ROOT_DIR . '/entidades/institucion.php';
include_once ROOT_DIR . '/servicios/servicios.php';
include 'disenio.php';

$idInstitucion = $_GET['id'];
$servicios = new Servicios();
$oInstitucion = $servicios->getInstitucionById($idInstitucion);
$vCarreras = $servicios->getCarrerasByInstitucion($idInstitucion);
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
                    <img id="logo-inst" src="<?php echo $oInstitucion->getLogo(); ?>"/>
                    <div id="datos-inst">
                        <h1 style="text-transform:uppercase;"> <?php echo $oInstitucion->getNombre(); ?> </h1>
                        <p> 
                            <?php echo $oInstitucion->getDescripcion(); ?>
                        </p>
                        <?php if ($oInstitucion->getDireccion()) {
                            ?>
                            <!--Mapa-->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3347.8814653500094!2d-60.64475619999999!3d-32.954138799999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab11ed89b5ff%3A0x3529f2b1ce2ebc15!2sE.+<?php echo $oInstitucion->getDireccion(); ?>!5e0!3m2!1ses-419!2sar!4v1400029251362" width="615" height="200" frameborder="0" style="border:0"></iframe>
                            <!--Fin de mapa--> 
                        <?php
                        }
                        if (!empty($vCarreras)) {
                            ?>
                            <h2>CARRERAS</h2>
                            <ul>
                                <?php
                                foreach ($vCarreras as $oCarrera) {
                                    echo '<li><a href="carrera.php?id=' . $oCarrera->getId() . '">' . $oCarrera->getNombre() . '</a></li>';
                                }
                                ?>
                            </ul>
                            <?php
                        }
                        ?>
                        <?php
                        if ($oInstitucion->getTelefono()) {
                            ?>
                            <h2>TELEFONO</h2>
                            <p> 
                            <?php echo $oInstitucion->getTelefono(); ?>
                            </p>
                        <?php } ?>
                        <?php
                        if ($oInstitucion->getEmail()) {
                            ?>
                            <h2>EMAIL</h2>
                            <p> 
                            <?php echo $oInstitucion->getEmail(); ?>
                            </p>
                        <?php } ?>
                        <?php
                        if ($oInstitucion->getWeb()) {
                            ?>
                            <h2>WEB</h2>
                            <p> 
                                <a href="<?php echo $oInstitucion->getWeb(); ?>">
    <?php echo $oInstitucion->getWeb(); ?>
                                </a>
                            </p>
<?php } ?>

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
