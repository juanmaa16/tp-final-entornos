<?php

@include_once '../init.php';
include_once ROOT_DIR . '/entidades/carrera.php';
include_once ROOT_DIR . '/servicios/servicios.php';

$servicios = new Servicios();

$action = $_GET['action'];
if ($action == "alta") {
    $nombre = $_POST['nombre'];
    $descripcion = trim($_POST['descripcion']);
    //$planEstudio = $_POST['planEstudio'];
    $planEstudio = "planestudio.pdf";
    $incumbencias = trim($_POST['incumbencias']);
    $idInstitucion = $_POST['idInstitucion'];
    $areaInteres = $_POST['areaInteres'];

    $oCarrera = new Carrera("", $nombre, $incumbencias, $planEstudio, $idInstitucion, $descripcion, $areaInteres);

    $servicios->altaCarrera($oCarrera);

    header("Location: http://www.google.com.ar");
} elseif ($action == "modifica") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = trim($_POST['descripcion']);
    //$planEstudio = $_POST['planEstudio'];
    $planEstudio = "planestudio.pdf";
    $incumbencias = trim($_POST['incumbencias']);
    $idInstitucion = $_POST['idInstitucion'];
    $areaInteres = $_POST['areaInteres'];

    $oCarrera = new Carrera($id, $nombre, $incumbencias, $planEstudio, $idInstitucion, $descripcion, $areaInteres);

    $servicios->modificaCarrera($oCarrera);
} elseif ($action == "baja") {
    
}
?>
