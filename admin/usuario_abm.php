<?php

@include_once '../init.php';
include_once ROOT_DIR . '/entidades/institucion.php';
include_once ROOT_DIR . '/entidades/usuario.php';
include_once ROOT_DIR . '/servicios/servicios.php';

$servicios = new Servicios();

$action = $_GET['action'];
if ($action == "alta") {
    $nombre_institucion = $_POST['nombre_institucion'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $oInstitucion = new Institucion("", $nombre_institucion, "", "", "", "", "", "");
    $idInstitucion = $servicios->altaInstitucion($oInstitucion);
    $oUsuario = new Usuario("", $usuario, md5($password), $idInstitucion);
    $servicios->altaUsuario($oUsuario);
    header("Location: usuarios.php");
} elseif ($action == "modifica") {
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $oUsuario = new Usuario($id, $usuario, md5($password), "");

    $servicios->modificaUsuario($oUsuario);
    header("Location: usuarios.php");
} elseif ($action == "baja") {
//    $idCarrera = $_GET['id'];
//    $servicios->bajaCarrera($idCarrera);
//    header("Location: carreras.php");
}
?>
