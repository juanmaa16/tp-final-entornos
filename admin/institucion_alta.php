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
                        <h1>CARGA INSTITUCIÓN</h1>
                        <form method="POST" action="institucion_abm.php?action=alta">
                            <label>Nombre</label><br/>
                            <input name="nombre" type="text" class="textbox" style="width:50%" required/><br/>
                            <label>Logo</label><br/>
                            <input name="logo" type="file" class="textbox" style="width:50%;height: 25px;"/><br/>
                            <label>Descripción</label><br/>
                            <textarea name="descripcion" class="textbox" style="width:50%;height: 150px;"></textarea><br/>
                            <label>Dirección</label><br/>
                            <input name="direccion" type="text" class="textbox" style="width:50%" required/><br/>
                            <label>Email</label><br/>
                            <input name="email" type="text" class="textbox" style="width:50%"/><br/>
                            <label>Telefono</label><br/>
                            <input name="telefono" type="text" class="textbox" style="width:50%"/><br/>
                            <label>Web</label><br/>
                            <input name="web" type="text" class="textbox" style="width:50%"/><br/>
                            <input type="submit" value="Guardar" class="boton"/>
                        </form>
                    </div>
                </div>
            </div>
             <?php pie(); ?>
        </div>
    </body>
</html>
