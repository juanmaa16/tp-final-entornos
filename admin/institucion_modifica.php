<?php
@include_once '../init.php';
include_once ROOT_DIR . '/entidades/institucion.php';
include_once ROOT_DIR . '/servicios/servicios.php';
 
include '../disenio.php' ; 

$idInstitucion=$_GET['id'];
$servicios=new Servicios();
$oInstitucion=$servicios->getInstitucionById($idInstitucion);
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/menu.css">
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/jquery.validate.js"></script>
    </head>
    <body>
        <div id="contenedor">
             <?php cabecera(); ?>
            <div id="principal">
                <div id="menu">
                    <ul id="css3menu1" class="topmenu">
                        <li class="topfirst"><a href="index.html" style="width:179px;height:28px;line-height:28px;"><img src="../images/home-home-icone-9323-128-as.png" alt=""/>&nbsp</a></li>
                        <li class="topmenu"><a href="carreras.php" style="width:179px;height:28px;line-height:28px;"><span>CARRERAS</span></a></li>
                        <li class="topmenu"><a href="instituciones.php" style="width:178px;height:28px;line-height:28px;">INSTITUCIONES</a></li>
                        <li class="topmenu"><a href="areas_int.php" style="width:178px;height:28px;line-height:28px;">AREAS DE INTERES</a></li>
                        <li class="toplast"><a href="index.html" style="width:179px;height:28px;line-height:28px;">CONTACTO</a></li>
                    </ul>
                </div>
                <div id="contenido-admin">
                    <div id="cuerpo">
                        <h1>MODIFICAR INSTITUCIÓN</h1>
                        <form method="POST" action="institucion_abm.php?action=modifica">
                            <label>Nombre</label><br/>
                            <input name="nombre" type="text" class="textbox" style="width:50%" value="<?php echo $oInstitucion->getNombre();?>" required/><br/>
                            <label>Logo</label><br/>
                            <input name="logo" type="file" class="textbox" style="width:50%;height: 25px;" value="<?php echo $oInstitucion->getLogo();?>"/><br/>
                            <label>Descripción</label><br/>
                            <textarea name="descripcion" class="textbox" style="width:50%;height: 150px;"><?php echo $oInstitucion->getDescripcion();?></textarea><br/>
                            <label>Dirección</label><br/>
                            <input name="direccion" type="text" class="textbox" style="width:50%" value="<?php echo $oInstitucion->getDireccion();?>" required/><br/>
                            <label>Email</label><br/>
                            <input name="email" type="text" class="textbox" style="width:50%" value="<?php echo $oInstitucion->getEmail();?>"/><br/>
                            <label>Telefono</label><br/>
                            <input name="telefono" type="text" class="textbox" style="width:50%" value="<?php echo $oInstitucion->getTelefono();?>"/><br/>
                            <label>Web</label><br/>
                            <input name="web" type="text" class="textbox" style="width:50%" value="<?php echo $oInstitucion->getWeb();?>"/><br/>
                            <input type="hidden" name="id" value="<?php echo $idInstitucion;?>"/>
                            <input type="submit" value="Guardar" class="boton"/>
                        </form>
                    </div>
                </div>
            </div>
             <?php pie(); ?>
        </div>
    </body>
</html>
