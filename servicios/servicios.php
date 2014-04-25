<?php

@include_once 'init.php';
include_once ROOT_DIR . '/datos/instituciones.php';

class Servicios {

    public function getInstituciones() {
        $institucionesRepository = new DataInstituciones();
        return $institucionesRepository->getInstituciones();
    }

}

?>