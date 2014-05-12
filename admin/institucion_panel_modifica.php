<?php 
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
               <?php menuAdmin(); ?>
                <div id="contenido-admin">
                    <div id="cuerpo">
                        <h1>PANEL DE MODIFICACIONES</h1>
                      <ul>
                      <br><li> <a href="usuarios.php">INSTITUCIÓN</a></li><br>
                      <li> <a href="institucion-modifica-listaCarr.html">CARRERAS</a></li><br>
                       <li> <a href="institucion-modifica-pass.php">CONTRASEÑA</a></li>
                      </ul>  


                    </div>
                </div>
            </div>
             <?php pie(); ?>
        </div>
    </body>
</html>
