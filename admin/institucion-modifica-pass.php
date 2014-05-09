<?php 
include '../disenio.php' ; 
?><!DOCTYPE html>
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
                        <h1>MODIFICAR CONTRASEÑA</h1>

                        <form method="POST" action="">
                            <label>Contraseña</label><br/>
                            <input name="password" type="password" class="textbox" style="width:50%" required/><br/>
                            <label>Repetir Contraseña</label><br/>
                            <input name="password2" type="password" class="textbox" style="width:50%" required/><br/><br>
                            <input type="submit" value="Guardar" class="boton"/><a href="institucion_panel_modifica.php" ><input style="margin-left:150px"  type="button" value="Volver" class="boton"/></a>
                        </form>


                    </div>
                </div>
            </div>
             <?php pie(); ?>
        </div>
    </body>
</html>
