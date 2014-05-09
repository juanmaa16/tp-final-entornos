<?php
@include_once 'init.php';
include_once ROOT_DIR . '/entidades/institucion.php';
include_once ROOT_DIR . '/servicios/servicios.php';
include disenio.php;
$servicios=new Servicios();
$vInstituciones=$servicios->getInstituciones();

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
          		<h1>LISTADO DE INSTITUCIONES</h1>
                <hr>
                <?php if(!empty ($vInstituciones)) {foreach($vInstituciones as $oInstitucion){?>
                <ul id="lista-carr">
                <li><a href="institucion.php?id=<?php echo $oInstitucion->getId()?>"> <img id="logo-list" src="<?php echo $oInstitucion->getLogo();?>"/><?php echo $oInstitucion->getNombre();?></a></li>
                </ul>
                <?php }
					}else{
						echo "No hay instituciones";
					}?>  
                </div>
                <div id="publicidades">
                    publicidad
                </div>

            </div>
             <?php pie(); ?>
        </div>
    </body>
</html>
