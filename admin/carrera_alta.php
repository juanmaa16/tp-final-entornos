<?php
require 'admin_check.php';
@include_once '../init.php';
include_once ROOT_DIR . '/entidades/areaInteres.php';
include_once ROOT_DIR . '/servicios/servicios.php';

$servicios = new Servicios();
$vAreasInteres = $servicios->getAreasInteres();
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
            <div id="header">
                <a href="../index.html"><img id="logo" src="../images/logo.png"/></a>
                <div id="buscador">
                    <form action="" method="get">
                        <!--<input type="text" placeholder="Buscar..."/>-->
                    </form>
                </div>
            </div>
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
                        <h1>CARGA CARRERA</h1>
                        <form method="POST" action="carrera_abm.php?action=alta">
                            <label>Nombre de la carrera</label><br/>
                            <input name="nombre" type="text" class="textbox" style="width:50%" required/><br/>
                            <label>Descripción</label><br/>
                            <textarea name="descripcion" class="textbox" style="width:50%;height: 150px;"></textarea><br/>
                            <label>Incumbencias</label><br/>
                            <textarea name="incumbencias" class="textbox" style="width:50%;height: 150px;"></textarea><br/>
                            <label>Área de interes</label><br/>
                            <select name="areaInteres" class="textbox" style="width:50%;height: 30px;"/>
                            <option value="" selected disabled>Seleccione un área</option>
                            <?php
                            foreach ($vAreasInteres as $oAreaInteres) {
                                echo '<option value="' . $oAreaInteres->getId() . '">' . utf8_encode($oAreaInteres->getNombre()) . '</option>';
                            }
                            ?>
                            </select><br/>
                            <label>Plan de estudio</label><br/>
                            <input name="planEstudio" type="file" class="textbox" style="width:50%;height: 25px;"/><br/><br/>
                            <input type="hidden" value="1" name="idInstitucion">
                            <input type="submit" value="Guardar" class="boton"/> <a href="institucion_alta.html" ><input style="margin-left:150px"  type="button" value="Volver" class="boton"/></a>
                        </form>


                    </div>
                </div>
            </div>
            <div id="footer">
            </div>
        </div>
    </body>
</html>
