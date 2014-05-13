<?php
@include_once 'init.php';
include_once ROOT_DIR . '/entidades/carrera.php';
include_once ROOT_DIR . '/entidades/areaInteres.php';
include_once ROOT_DIR . '/servicios/servicios.php';
include 'disenio.php';

$servicios = new Servicios();
$vArquitectura = $servicios->getCarrerasByAreaInteres(1);
$vArte = $servicios->getCarrerasByAreaInteres(2);
$vEconomicas = $servicios->getCarrerasByAreaInteres(3);
$vGastronomia = $servicios->getCarrerasByAreaInteres(4);
$vHoteleria = $servicios->getCarrerasByAreaInteres(5);
$vHumanidades = $servicios->getCarrerasByAreaInteres(6);
$vIdiomas = $servicios->getCarrerasByAreaInteres(7);
$vIngenieria = $servicios->getCarrerasByAreaInteres(8);
$vNaturales = $servicios->getCarrerasByAreaInteres(9);
$vSalud = $servicios->getCarrerasByAreaInteres(10);
$vSociales = $servicios->getCarrerasByAreaInteres(11);
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
        <script language="JavaScript">
            function muestra_oculta(id){
                if (document.getElementById){ //se obtiene el id
                    var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
                    el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
                }
            }
            window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
                muestra_oculta('sociales_lista');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
                muestra_oculta('salud_lista');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
                muestra_oculta('nyce_lista');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
                muestra_oculta('humanidades_lista');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
                muestra_oculta('economicas_lista');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
                muestra_oculta('ingenieria_lista');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
                muestra_oculta('idiomas_lista');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
                muestra_oculta('hyt_lista');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
                muestra_oculta('ayd_lista');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
                muestra_oculta('arte_lista');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
                muestra_oculta('gastronomia_lista');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
            }
        </script>
    </head>
    <body>
        <div id="contenedor">
            <?php cabecera();?>
            <div id="principal">
                <?php menu();?>
                <div id="contenido">
                    <ul id="areas-interes">
                        <a onclick="muestra_oculta('ayd_lista')" title=""><li>ARQUITECTURA Y DISEÑO</li></a>
                        <ul id="ayd_lista">
                            <?php
                            if (!empty($vArquitectura)) {
                                foreach ($vArquitectura as $oCarrera) {
                                    $oInstitucion=$servicios->getInstitucionById($oCarrera->getIdInstitucion());
                                    echo '<li><a href="carrera.php?id=' . $oCarrera->getId() . '">' . $oCarrera->getNombre() . ' - '.$oInstitucion->getNombre().'</a></li>';
                                }
                            } else {
                                echo 'No exiten carreras para este área de interes';
                            }
                            ?>
                        </ul>
                        <a onclick="muestra_oculta('arte_lista')" title=""><li>ARTE</li></a>
                        <ul id="arte_lista">
                            <?php
                            if (!empty($vArte)) {
                                foreach ($vArte as $oCarrera) {
                                    $oInstitucion=$servicios->getInstitucionById($oCarrera->getIdInstitucion());
                                    echo '<li><a href="carrera.php?id=' . $oCarrera->getId() . '">' . $oCarrera->getNombre() . ' - '.$oInstitucion->getNombre().'</a></li>';
                                 }
                            } else {
                                echo 'No exiten carreras para este área de interes';
                            }
                            ?>                   </ul>
                        <a onclick="muestra_oculta('economicas_lista')" title=""><li>ECONÓMICAS</li></a>
                        <ul id="economicas_lista">
                            <?php
                            if (!empty($vEconomicas)) {
                                foreach ($vEconomicas as $oCarrera) {
                                    $oInstitucion=$servicios->getInstitucionById($oCarrera->getIdInstitucion());
                                    echo '<li><a href="carrera.php?id=' . $oCarrera->getId() . '">' . $oCarrera->getNombre() . ' - '.$oInstitucion->getNombre().'</a></li>';
                                }
                            } else {
                                echo 'No exiten carreras para este área de interes';
                            }
                            ?>
                        </ul>
                        <a onclick="muestra_oculta('gastronomia_lista')" title=""><li>GASTRONOMÍA</li></a>
                        <ul id="gastronomia_lista">
                            <?php
                            if (!empty($vGastronomia)) {
                                foreach ($vGastronomia as $oCarrera) {
                                     $oInstitucion=$servicios->getInstitucionById($oCarrera->getIdInstitucion());
                                    echo '<li><a href="carrera.php?id=' . $oCarrera->getId() . '">' . $oCarrera->getNombre() . ' - '.$oInstitucion->getNombre().'</a></li>';
                                  }
                            } else {
                                echo 'No exiten carreras para este área de interes';
                            }
                            ?>       
                        </ul>
                        <a onclick="muestra_oculta('hyt_lista')" title=""><li>HOTELERÍA Y TURISMO</li></a>
                        <ul id="hyt_lista">
                            <?php
                            if (!empty($vHoteleria)) {
                                foreach ($vHoteleria as $oCarrera) {
                                     $oInstitucion=$servicios->getInstitucionById($oCarrera->getIdInstitucion());
                                    echo '<li><a href="carrera.php?id=' . $oCarrera->getId() . '">' . $oCarrera->getNombre() . ' - '.$oInstitucion->getNombre().'</a></li>';
                                 }
                            } else {
                                echo 'No exiten carreras para este área de interes';
                            }
                            ?>       
                        </ul>
                        <a onclick="muestra_oculta('humanidades_lista')" title=""><li>HUMANIDADES</li></a>
                        <ul id="humanidades_lista">
                            <?php
                            if (!empty($vHumanidades)) {
                                foreach ($vHumanidades as $oCarrera) {
                                    $oInstitucion=$servicios->getInstitucionById($oCarrera->getIdInstitucion());
                                    echo '<li><a href="carrera.php?id=' . $oCarrera->getId() . '">' . $oCarrera->getNombre() . ' - '.$oInstitucion->getNombre().'</a></li>';
                                }
                            } else {
                                echo 'No exiten carreras para este área de interes';
                            }
                            ?>        
                        </ul>
                        <a onclick="muestra_oculta('idiomas_lista')" title=""><li>IDIOMAS</li></a>
                        <ul id="idiomas_lista">
                            <?php
                            if (!empty($vIdiomas)) {
                                foreach ($vIdiomas as $oCarrera) {
                                     $oInstitucion=$servicios->getInstitucionById($oCarrera->getIdInstitucion());
                                    echo '<li><a href="carrera.php?id=' . $oCarrera->getId() . '">' . $oCarrera->getNombre() . ' - '.$oInstitucion->getNombre().'</a></li>';
                                }
                            } else {
                                echo 'No exiten carreras para este área de interes';
                            }
                            ?>         
                        </ul>
                        <a onclick="muestra_oculta('ingenieria_lista')" title=""><li>INGENIERÍA</li></a>
                        <ul id="ingenieria_lista">
                            <?php
                            if (!empty($vIngenieria)) {
                                foreach ($vIngenieria as $oCarrera) {
                                     $oInstitucion=$servicios->getInstitucionById($oCarrera->getIdInstitucion());
                                    echo '<li><a href="carrera.php?id=' . $oCarrera->getId() . '">' . $oCarrera->getNombre() . ' - '.$oInstitucion->getNombre().'</a></li>';
                                 }
                            } else {
                                echo 'No exiten carreras para este área de interes';
                            }
                            ?>          
                        </ul>
                        <a onclick="muestra_oculta('nyce_lista')" title=""><li>NATURALES Y CIENCIAS EXACTAS</li></a>
                        <ul id="nyce_lista">
                            <?php
                            if (!empty($vNaturales)) {
                                foreach ($vNaturales as $oCarrera) {
                                    $oInstitucion=$servicios->getInstitucionById($oCarrera->getIdInstitucion());
                                    echo '<li><a href="carrera.php?id=' . $oCarrera->getId() . '">' . $oCarrera->getNombre() . ' - '.$oInstitucion->getNombre().'</a></li>';
                                  }
                            } else {
                                echo 'No exiten carreras para este área de interes';
                            }
                            ?>                 
                        </ul>
                        <a onclick="muestra_oculta('salud_lista')" title=""><li>SALUD</li></a>
                        <ul id="salud_lista">
                            <?php
                            if (!empty($vSalud)) {
                                foreach ($vSalud as $oCarrera) {
                                    $oInstitucion=$servicios->getInstitucionById($oCarrera->getIdInstitucion());
                                    echo '<li><a href="carrera.php?id=' . $oCarrera->getId() . '">' . $oCarrera->getNombre() . ' - '.$oInstitucion->getNombre().'</a></li>';
                                }
                            } else {
                                echo 'No exiten carreras para este área de interes';
                            }
                            ?>                        
                        </ul>
                        <a onclick="muestra_oculta('sociales_lista')" title=""><li>SOCIALES</li></a>
                        <ul id="sociales_lista">
                            <?php
                            if (!empty($vSociales)) {
                                foreach ($vSociales as $oCarrera) {
                                     $oInstitucion=$servicios->getInstitucionById($oCarrera->getIdInstitucion());
                                    echo '<li><a href="carrera.php?id=' . $oCarrera->getId() . '">' . $oCarrera->getNombre() . ' - '.$oInstitucion->getNombre().'</a></li>';
                                }
                            } else {
                                echo 'No exiten carreras para este área de interes';
                            }
                            ?>                   
                        </ul>



                    </ul>

                </div>
                <div id="publicidades">
                    gfhfjfj
                </div>

            </div>
            <?php pie();?>
        </div>
    </body>
</html>
