<?php

require_once(ROOT_DIR . "/datos/data.php");
require_once (ROOT_DIR . "/entidades/carrera.php");

class DataCarreras {

    private function generaCarrera($row) {
        $id = $row['id_carrera'];
        $nombre = $row['nombre_carrera'];
        $descripcion = $row['descripcion_carrera'];
        $planEstudio = $row['plan_estudio_carrera'];
        $incumbencias = $row['incumbencias_carrera'];
        $idInstitucion = $row['id_institucion'];
        $areaInteres = $row['id_area_interes'];

        $oCarrera = new Carrera($id, $nombre, $incumbencias, $planEstudio, $idInstitucion, $descripcion, $areaInteres);

        return $oCarrera;
    }

    public function getCarreras() {
        $bd = new Conexion();
        $row = $bd->query("SELECT * FROM carreras");
        $index = 0;
        $vCarreras = array();
        foreach ($row as $registro) {
            $oCarrera = $this->generaCarrera($registro);
            $vCarreras[$index] = $oCarrera;
            $index++;
        }
        return $vCarreras;
    }

    public function getCarreraById($idCarrera) {
        $bd = new Conexion();
        $row = $bd->query("SELECT * FROM carreras WHERE id_carrera=" . $idCarrera);
        $oCarrera = null;
        if ($row) {
            $oCarrera = $this->generaCarrera($row[0]);
        }
        return $oCarrera;
    }

    public function altaCarrera(Carrera $oCarrera) {
        $bd = new Conexion();
        $bd->query("INSERT INTO carreras (nombre_carrera,descripcion_carrera,plan_estudio_carrera,
			incumbencias_carrera, id_institucion,id_area_interes)
		VALUES ('" . $oCarrera->getNombre() . "','" . $oCarrera->getDescripcion() . "',
			'" . $oCarrera->getPlanEstudio() . "','" . $oCarrera->getIncumbencias() . "', '" . $oCarrera->getIdInstitucion() . "',
			'" . $oCarrera->getAreaInteres() . "')");
    }

    public function modificaCarrera(Carrera $oCarrera) {
        $bd = new Conexion();
        $bd->query("UPDATE carreras SET nombre_carrera='" . $oCarrera->getNombre() . "', descripcion_carrera='" . $oCarrera->getDescripcion() . "',
			plan_estudio_carrera='" . $oCarrera->getPlanEstudio() . "',incumbencias_carrera='" . $oCarrera->getIncumbencias() . "',
			id_institucion='" . $oCarrera->getIdInstitucion() . "',id_area_interes='" . $oCarrera->getAreaInteres() . "' WHERE id_carrera=" . $oCarrera->getId());
    }

    public function bajaCarrera(Carrera $oCarrera) {
        $bd = new Conexion();
        $bd->query("DELETE FROM carreras WHERE id_carrera=" . $oCarrera->getId());
    }

}

?>