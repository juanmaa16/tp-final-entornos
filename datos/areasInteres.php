<?php

require_once(ROOT_DIR . "/datos/data.php");
require_once (ROOT_DIR . "/entidades/areaInteres.php");

class DataAreasInteres {

    private function generaAreaInteres($row) {
        $id = $row['id_area_interes'];
        $nombre = $row['nombre_area_interes'];
        $oAreaInteres = new AreaInteres($nombre, $id);
        return $oAreaInteres;
    }

    public function getAreasInteres() {
        $bd = new Conexion();
        $row = $bd->query("SELECT * FROM areas_interes");
        $index = 0;
        $vAreasInteres = array();
        foreach ($row as $registro) {
            $oAreaInteres = $this->generaAreaInteres($registro);
            $vAreasInteres[$index] = $oAreaInteres;
            $index++;
        }
        return $vAreasInteres;
    }

}

?>