<?php

@include_once 'init.php';
include_once ROOT_DIR . '/entidades/institucion.php';
include_once ROOT_DIR . '/servicios/servicios.php';

$servicios = new Servicios();
$vInstituciones = $servicios->getInstituciones();

foreach ($vInstituciones as $oInstitucion){
    echo 'Nombre institucion: ' . $oInstitucion->getNombre();
    echo '<br/>';
    echo 'Descripcion institucion: ' . $oInstitucion->getDescripcion();
    echo '<br/>';
    echo '<br/>';
    echo '<br/>';
}
?>