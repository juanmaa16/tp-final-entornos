<?php

session_start();

include_once '../init.php';
include_once ROOT_DIR . '/servicios/servicios.php';
include_once ROOT_DIR . '/entidades/usuario.php';

$estadoLogin = $_SESSION['estadoLogin'];
if (isset($estadoLogin) && $estadoLogin) {
    header("Location: admin_panel.php");
    return;
}

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$servicios = new Servicios();
$oUsuario = $servicios->getUsuarioByNombreUsuario($usuario);

if (isset($oUsuario) && $oUsuario->getUsuario() == $usuario && $oUsuario->getPassword() == md5($password)) {
    $_SESSION['estadoLogin'] = TRUE;
    $_SESSION['id_usuario'] = $oUsuario->getId();
    $_SESSION['nombre_usuario'] = $oUsuario->getUsuario();
    $_SESSION['id_institucion'] = $oUsuario->getIdInstitucion();
    header("Location: admin_panel.php");
} elseif ($usuario == NULL || $password == NULL) {
    header("Location: admin_login.php");
} else {
    header("Location: admin_login.php?msg=error");
}
?>
