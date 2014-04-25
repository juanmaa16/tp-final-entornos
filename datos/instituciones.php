<?php

require_once ('init.php');
require_once(ROOT_DIR . "/datos/data.php");
require_once (ROOT_DIR . "/entidades/institucion.php");

class DataInstituciones {

    public function getInstituciones() {
        $bd = new Conexion();
        $row = $bd->query("SELECT * FROM instituciones");
        $index = 0;
        $vInstituciones = array();
        foreach ($row as $registro) {
            $oInstitucion = $this->generaInstitucion($registro);
            $vInstituciones[$index] = $oInstitucion;
            $index++;
        }
        return $vInstituciones;
    }
    
    

    private function generaInstitucion($row) {
        $id = $row['id_institucion'];
        $nombre = $row['nombre_institucion'];
        $logo = $row['logo_institucion'];
        $direccion = $row['direccion_institucion'];
        $descripcion = $row['descripcion_institucion'];
        $telefono = $row['telefono_institucion'];
        $email = $row['email_institucion'];
        $web = $row['web_institucion'];

        $oInstitucion = new Institucion();
        $oInstitucion->setId($id);
        $oInstitucion->setNombre($nombre);
        $oInstitucion->setLogo($logo);
        $oInstitucion->setDireccion($direccion);
        $oInstitucion->setDescripcion($descripcion);
        $oInstitucion->setTelefono($telefono);
        $oInstitucion->setEmail($email);
        $oInstitucion->setWeb($web);

        return $oInstitucion;
    }

}

?>
