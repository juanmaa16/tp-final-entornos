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
                        <h1>MODIFICAR CARRERA</h1>
                        <form method="POST" action="">
                            <label>Nombre de la carrera</label><br/>
                            <input name="nombre_Carrera" type="text" class="textbox" style="width:50%" required/><br/>
                            
                            <label>Descripción</label><br/>
                            <textarea name="descripcion" class="textbox" style="width:50%;height: 150px;"></textarea><br/>
                             <label>Incumbencias</label><br/>
                            <textarea name="icumbencias" class="textbox" style="width:50%;height: 150px;"></textarea><br/>
                            <label>Plan de estudio</label><br/>
                            <input name="planEstudio" type="file" class="textbox" style="width:50%;height: 25px;" required/><br/><br/>
                            <input type="submit" value="Guardar" class="boton"/> <a href="institucion_panel_modifica.php" ><input style="margin-left:150px"  type="button" value="Volver" class="boton"/></a>
                        </form>


                    </div>
                </div>
            </div>
             <?php pie(); ?>
        </div>
    </body>
</html>
