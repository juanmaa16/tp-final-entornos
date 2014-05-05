<?php

@include_once '../init.php';
include_once ROOT_DIR . '/entidades/institucion.php';
include_once ROOT_DIR . '/servicios/servicios.php';

$servicios = new Servicios();

$action = $_GET['action'];
if ($action == "alta") {
    $nombre = $_POST['nombre'];
    $logo = "ellogo.jpg";
    $descripcion = $_POST['descripcion'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $web = $_POST['web'];

    $oInstitucion = new Institucion("", $nombre, $logo, $direccion, $descripcion, $telefono, $email, $web);

    $servicios->altaInstitucion($oInstitucion);

    header("Location: http://www.google.com.ar");
} elseif ($action == "modifica") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $logo = "ellogo.jpg";
    $descripcion = $_POST['descripcion'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $web = $_POST['web'];

    $oInstitucion = new Institucion($id, $nombre, $logo, $direccion, $descripcion, $telefono, $email, $web);

    $servicios->modificaInstitucion($oInstitucion);
} elseif ($action == "baja") {
    $id = $_GET['id'];
	$servicios->bajaInstitucion($id);
	header("Location:usuarios.php");
}
?>
