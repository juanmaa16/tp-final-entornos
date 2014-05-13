<?php
session_start();
@include_once '../init.php';
include_once ROOT_DIR . '/servicios/servicios.php';
include_once ROOT_DIR . '/entidades/usuario.php';

$password = $_POST['password'];
$password2 = $_POST['password2'];
$idUsuario = $_SESSION['id_usuario'];



if (isset($password) && isset($password2) && $password == $password2) {
    $servicios = new Servicios();
    $servicios->modificaPassword(md5($password), $idUsuario);
    header('Location:index.php');
} else {
    header('Location:usuario_cambio_pass.php?msg=error'); //Suponemos que las contraseñas no son iguales o estan vaciass
}
?>