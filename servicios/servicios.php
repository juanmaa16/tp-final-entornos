<?php

@include_once 'init.php';
include_once ROOT_DIR . '/datos/instituciones.php';

class Servicios {

    public function getInstituciones() {
        $institucionesRepository = new DataInstituciones();
        return $institucionesRepository->getInstituciones();
    }

    public function altaInstitucion(Institucion $oInstitucion) {
        $institucionesRepository = new DataInstituciones();
        $institucionesRepository->altaInstitucion($oInstitucion);
    }

    public function getInstitucionById($idInstitucion) {
        $institucionesRepository = new DataInstituciones();
        return $institucionesRepository->getIntitucionById($idInstitucion);
    }

    public function modificaInstitucion(Institucion $oInstitucion) {
        $institucionesRepository = new DataInstituciones();
        $institucionesRepository->modificaInstitucion($oInstitucion);
    }

}

?>