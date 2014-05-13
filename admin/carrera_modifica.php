<?php
require 'admin_check.php';
@include_once '../init.php';
include_once ROOT_DIR . '/entidades/carrera.php';
include_once ROOT_DIR . '/entidades/areaInteres.php';
include_once ROOT_DIR . '/servicios/servicios.php';
include '../disenio.php';

$idCarrera = $_GET['id'];
$servicios = new Servicios();
$oCarrera = $servicios->getCarreraById($idCarrera);
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
              <?php cabecera();?>
            <div id="principal">
                  <?php menuInstitucion();?>
                <div id="contenido-admin">
                    <div id="cuerpo">
                        <h1>CARGA CARRERA</h1>
                        <form method="POST" action="carrera_abm.php?action=modifica">
                            <label>Nombre de la carrera</label><br/>

                            <input name="nombre" type="text" class="textbox" style="width:50%" value="<?php echo $oCarrera->getNombre(); ?>" required/><br/>
                            <label>Descripción</label><br/>
                            <textarea name="descripcion" class="textbox" style="width:50%;height: 150px;"><?php echo $oCarrera->getDescripcion(); ?></textarea><br/>
                            <label>Incumbencias</label><br/>
                            <textarea name="incumbencias" class="textbox" style="width:50%;height: 150px;"><?php echo $oCarrera->getIncumbencias(); ?>
                            </textarea><br/>
                            <label>Área de interes</label><br/>
                            <select name="areaInteres" class="textbox" style="width:50%;height: 30px;"/>
                            <option value="" disabled>Seleccione un área</option>
                            <?php
                            foreach ($vAreasInteres as $oAreaInteres) {
                                echo '<option value="' . $oAreaInteres->getId() . '" ';
                                echo ($oAreaInteres->getId()==$oCarrera->getAreaInteres()) ? 'selected' : '';
                                echo '>' . utf8_encode($oAreaInteres->getNombre()) . '</option>';
                            }
                            ?>
                            </select><br/>
                            <label>Plan de estudio</label><br/>
                            <input name="planEstudio" type="file" class="textbox" style="width:50%;height: 25px;" 
                                   value="<?php echo $oCarrera->getPlanEstudio(); ?>"/><br/><br/>
                            <input type="hidden" value="<?php echo $_SESSION['id_institucion']?>" name="idInstitucion">
                            <input type="hidden" name="id" value="<?php echo $idCarrera; ?>"/>
                            <input type="submit" value="Guardar" class="boton"/> <a href="institucion_alta.php" ><input style="margin-left:150px"  type="button" value="Volver" class="boton"/></a>
                        </form>


                    </div>
                </div>
            </div>
            <?php pie();?>
        </div>
    </body>
</html>
