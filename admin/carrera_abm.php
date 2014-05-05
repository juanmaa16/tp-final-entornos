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

    $oCarrera = new Carrera("", $nombre, $incumbencias, $planEstudio, $idInstitucion, $descripcion);

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

    $oCarrera = new Carrera($id, $nombre, $incumbencias, $planEstudio, $idInstitucion, $descripcion);
   
    $servicios->modificaCarrera($oCarrera);
} elseif ($action == "baja") {

    
}
?>
