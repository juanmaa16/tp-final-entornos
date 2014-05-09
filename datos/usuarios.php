<?php

require_once ('init.php');
require_once(ROOT_DIR . "/datos/data.php");
require_once (ROOT_DIR . "/entidades/usuario.php");

class DataUsuarios {

    public function getUsuarioByNombreUsuario($nombreUsuario) {
        $bd = new Conexion();
        $row = $bd->query("SELECT * FROM usuarios WHERE nombre_usuario='$nombreUsuario'");
        $index = 0;
        $vUsuarios = array();
        foreach ($row as $registro) {
            $oUsuario = $this->generaUsuario($registro);
            $vUsuarios[$index] = $oUsuario;
            $index++;
        }
        return $vUsuarios;
    }

    private function generaUsuario($row) {
        $id = $row['id_usuario'];
        $usuario = $row['nombre_usuario'];
        $password = $row['clave_usuario'];
        $idInstitucion = $row['id_institucion'];
        $oUsuario = new Usuario($id, $usuario, $password, $idInstitucion);
        return $oUsuario;
    }

}

?>
