<?php

require_once(ROOT_DIR . "/datos/data.php");
require_once (ROOT_DIR . "/entidades/usuario.php");

class DataUsuarios {

    public function getUsuariosPag($from, $perPage) {
        $bd = new Conexion();
        $row = $bd->query("SELECT * FROM usuarios ORDER BY nombre_usuario DESC LIMIT $from,$perPage");
        $vUsuarios = array();
        if ($row) {
            $index = 0;
            foreach ($row as $registro) {
                $oUsuario = $this->generaUsuario($registro);
                $vUsuarios[$index] = $oUsuario;
                $index++;
            }
        }
        return $vUsuarios;
    }

    public function getUsuarios() {
        $bd = new Conexion();
        $row = $bd->query("SELECT * FROM usuarios");
        $vUsuarios = array();
        if ($row) {
            $index = 0;
            foreach ($row as $registro) {
                $oUsuario = $this->generaUsuario($registro);
                $vUsuarios[$index] = $oUsuario;
                $index++;
            }
        }
        return $vUsuarios;
    }

    public function altaUsuario(Usuario $oUsuario) {
        $bd = new Conexion();
        $row = $bd->query("INSERT INTO usuarios(nombre_usuario,clave_usuario,id_institucion)
            VALUES('" . $oUsuario->getUsuario() . "','" . $oUsuario->getPassword() . "','" . $oUsuario->getIdInstitucion() . "')");
    }

    public function modificaUsuario(Usuario $oUsuario) {
        $bd = new Conexion();
        $bd->query("UPDATE usuarios SET nombre_usuario='" . $oUsuario->getUsuario() . "',clave_usuario='" . $oUsuario->getPassword() . "'
                WHERE id_usuario=" . $oUsuario->getId());
    }

    public function modificaPassword($password, $idUsuario) {
        $bd = new Conexion();
        $bd->query("UPDATE usuarios SET clave_usuario='" . $password . "' WHERE id_usuario=" . $idUsuario);
    }

    public function getUsuarioByNombreUsuario($nombreUsuario) {
        $bd = new Conexion();
        $row = $bd->query("SELECT * FROM usuarios WHERE nombre_usuario='$nombreUsuario'");
        $oUsuario = null;
        if ($row[0]) {
            $oUsuario = $this->generaUsuario($row[0]);
        }
        return $oUsuario;
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
