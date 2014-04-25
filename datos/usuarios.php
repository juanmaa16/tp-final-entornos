<?php

require_once ('init.php');
require_once(ROOT_DIR . "/datos/data.php");
require_once (ROOT_DIR . "/entidades/usuario.php");

class DataUsuarios {

    public function getUsuarios() {
        $bd = new Conexion();
        $row = $bd->query("SELECT * FROM usuarios");
        $index = 0;
        $vUsuarios = array();
        foreach ($row as $registro) {
            $oUsuario = $this->generaUsuario($registro);
            $vUsuarios[$index] = $oUsuario;
            $index++;
        }
        return $vUsuarios;
    }

    public function generaUsuario($row) {
        $usuario = $row['usuario'];
        $password = $row['password'];
        $oUsuario = new Usuario();
        $oUsuario->setUser($usuario);
        $oUsuario->setPass($password);
        return $oUsuario;
    }

}

?>
