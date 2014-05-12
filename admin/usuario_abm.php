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
//    $id = $_POST['id'];
//    $nombre = $_POST['nombre'];
//    $descripcion = trim($_POST['descripcion']);
//    //$planEstudio = $_POST['planEstudio'];
//    $planEstudio = "planestudio.pdf";
//    $incumbencias = trim($_POST['incumbencias']);
//    $idInstitucion = $_POST['idInstitucion'];
//    $areaInteres = $_POST['areaInteres'];
//
//    $oCarrera = new Carrera($id, $nombre, $incumbencias, $planEstudio, $idInstitucion, $descripcion, $areaInteres);
//
//    $servicios->modificaCarrera($oCarrera);
    header("Location: carreras.php");
} elseif ($action == "baja") {
//    $idCarrera = $_GET['id'];
//    $servicios->bajaCarrera($idCarrera);
//    header("Location: carreras.php");
}
?>
