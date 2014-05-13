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
                    <div id="cuerpo">
                        <h1>Contacto</h1>
                        <p>Por favor pongase en contacto con nosotros por cualquier duda o comentario a través de nuestro formulario de Contacto.<br/>
                            A la brevedad nos estaremos comunicando con usted. Muchas gracias!.
                        </p>

                        <form method="POST" action="enviar-email.php">
                            <label>Nombre y apellido</label><br/>
                            <input name="nombre_apellido" type="text" class="textbox" style="width:90%" required/><br/>
                            <label>Email</label><br/>
                            <input name="email" type="text" class="textbox" style="width:90%" required/><br/>
                            <label>Consulta</label><br/>
                            <textarea name="consulta" class="textbox" style="width:90%;height: 150px;" required></textarea>
                            <input type="submit" value="Enviar" class="boton"/>
                        </form>


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
