<?php
require 'admin_check.php';
include '../disenio.php';
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
                        <h1>Bienvenido <?php echo $_SESSION['nombre_usuario']; ?></h1>
                    </div>
                </div>
            </div>
            <?php pie(); ?>
        </div>
    </body>
</html>
