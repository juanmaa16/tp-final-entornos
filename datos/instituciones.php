<?php

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

    public function getIntitucionById($idInstitucion) {
        $bd = new Conexion();
        $row = $bd->query("SELECT * FROM instituciones WHERE id_institucion=" . $idInstitucion);
        $oInstitucion = null;
        if ($row) {
            $oInstitucion = $this->generaInstitucion($row[0]);
        }
        return $oInstitucion;
    }

    public function altaInstitucion(Institucion $oInstitucion) {
        $bd = new Conexion();
        $bd->query("INSERT INTO instituciones (nombre_institucion,logo_institucion,direccion_institucion,
                    descripcion_institucion,telefono_institucion,email_institucion,web_institucion)
                    VALUES ('" . $oInstitucion->getNombre() . "','" . $oInstitucion->getLogo() . "',
                        '" . $oInstitucion->getDireccion() . "','" . $oInstitucion->getDescripcion() . "',
                            '" . $oInstitucion->getTelefono() . "','" . $oInstitucion->getEmail() . "',
                                '" . $oInstitucion->getWeb() . "')");
    }

    public function modificaInstitucion(Institucion $oInstitucion) {
        $bd = new Conexion();
        $bd->query("UPDATE instituciones SET nombre_institucion='" . $oInstitucion->getNombre() . "',logo_institucion='" . $oInstitucion->getLogo() . "',
            direccion_institucion= '" . $oInstitucion->getDireccion() . "',descripcion_Institucion='" . $oInstitucion->getDescripcion() . "',
                telefono_institucion='" . $oInstitucion->getTelefono() . "',email_institucion='" . $oInstitucion->getEmail() . "',web_institucion='" . $oInstitucion->getWeb() . "' WHERE id_institucion=" . $oInstitucion->getId());
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

        $oInstitucion = new Institucion($id, $nombre, $logo, $direccion, $descripcion, $telefono, $email, $web);
//        $oInstitucion->setId($id);
//        $oInstitucion->setNombre($nombre);
//        $oInstitucion->setLogo($logo);
//        $oInstitucion->setDireccion($direccion);
//        $oInstitucion->setDescripcion($descripcion);
//        $oInstitucion->setTelefono($telefono);
//        $oInstitucion->setEmail($email);
//        $oInstitucion->setWeb($web);

        return $oInstitucion;
    }

}

?>
