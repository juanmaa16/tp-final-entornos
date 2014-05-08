<?php

@include_once 'init.php';
include_once ROOT_DIR . '/datos/instituciones.php';
include_once ROOT_DIR . '/datos/carreras.php';
include_once ROOT_DIR . '/datos/areasInteres.php';

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

    public function getCarreras() {
        $carrerasRepository = new DataCarreras();
        return $carrerasRepository->getCarreras();
    }
    
    public function getCarrerasPag($from,$limit) {
        $carrerasRepository = new DataCarreras();
        return $carrerasRepository->getCarrerasPag($from, $limit);
    }

    public function altaCarrera(Carrera $oCarrera) {
        $carrerasRepository = new DataCarreras();
        return $carrerasRepository->altaCarrera($oCarrera);
    }

    public function getCarreraById($idCarrera) {
        $carrerasRepository = new DataCarreras();
        return $carrerasRepository->getCarreraById($idCarrera);
    }

    public function modificaCarrera(Carrera $oCarrera) {
        $carrerasRepository = new DataCarreras();
        return $carrerasRepository->modificaCarrera($oCarrera);
    }

    public function bajaCarrera($idCarrera) {
        $carrerasRepository = new DataCarreras();
        return $carrerasRepository->bajaCarrera($idCarrera);
    }

    public function getAreasInteres() {
        $areasInteresRepository = new DataAreasInteres();
        return $areasInteresRepository->getAreasInteres();
    }

}

?>