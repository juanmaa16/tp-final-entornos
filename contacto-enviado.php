<?php 
include 'disenio.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/jquery.validate.js"></script>
    </head>
    <body>
        <div id="contenedor">
            <?php cabecera();?>
            <div id="principal">
                 <?php menu();?>
                <div id="contenido">
                    <div id="cuerpo" style="height:500px;">
                        <h1>Contacto</h1>
                        <h2>
                            Gracias por su consulta, nos comunicaremos a la brevedad con usted.
                        </h2>
                    </div>
                </div>
                <div id="publicidades">
                    <img src="images/black_120x240.gif" width="170"/>
                    <br/>
                    <img src="images/black_125x125.gif" width="170"/>
                </div>

            </div>
            <?php pie();?>
        </div>
    </body>
</html>
