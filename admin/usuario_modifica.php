<?php
require 'admin_check.php';
include '../disenio.php';
@include_once '../init.php';
include_once ROOT_DIR . '/entidades/usuario.php';
include_once ROOT_DIR . '/servicios/servicios.php';

$nombreUsuario = $_GET['u'];
$servicios = new Servicios();
$oUsuario = $servicios->getUsuarioByNombreUsuario($nombreUsuario);
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
                <?php menu(); ?>
                <div id="contenido-admin">
                    <div id="cuerpo">
                        <h1>EDITAR USUARIO</h1>
                        <form method="POST" action="usuario_abm.php?action=modifica">
                            <input type="hidden" name="id" value="<?php echo $oUsuario->getId(); ?>"/>
                            <label>Usuario</label><br/>
                            <input name="usuario" type="text" class="textbox" style="width:50%" required value="<?php echo $oUsuario->getUsuario(); ?>"/><br/>
                            <label>Contraseña</label><br/>
                            <input name="password" type="password" class="textbox" style="width:50%" required value="<?php echo $oUsuario->getPassword(); ?>"/><br/>
                            <input type="submit" value="Modificar" class="boton"/>
                        </form>
                    </div>
                </div>
            </div>
            <?php pie(); ?>
        </div>
    </body>
</html>

