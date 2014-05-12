<?php 
require 'admin_check.php';
include '../disenio.php' ; 
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
                <?php menuInstitucion(); ?>
                <div id="contenido-admin">
                    <div id="cuerpo">
                        <h1>ASIGNAR USUARIO</h1>
                        <form method="POST" action="usuario_abm.php?action=alta">
                            <label>Nombre institución</label><br/>
                            <input name="nombre_institucion" type="text" class="textbox" style="width:50%" required/><br/>
                            <label>Usuario</label><br/>
                            <input name="usuario" type="text" class="textbox" style="width:50%" required/><br/>
                            <label>Contraseña</label><br/>
                            <input name="password" type="text" class="textbox" style="width:50%" required/><br/>
                            <input type="submit" value="Agregar" class="boton"/>
                        </form>
                    </div>
                </div>
            </div>
             <?php pie(); ?>
        </div>
    </body>
</html>

