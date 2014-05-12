<?php

@include_once 'init.php';
include_once ROOT_DIR . '/datos/instituciones.php';
include_once ROOT_DIR . '/datos/carreras.php';
include_once ROOT_DIR . '/datos/areasInteres.php';
include_once ROOT_DIR . '/datos/usuarios.php';

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
	public function bajaInstitucion($id){
		$institucionesRepository = new DataInstituciones();
		$institucionesRepository->bajaInstitucion($id);
	}
	public function getInstitucionesPag($from,$perPage)
	{
		$institucionesRepository = new DataInstituciones();
        return $institucionesRepository->getInstitucionesPag($from,$perPage);
	}

    public function getCarreras() {
        $carrerasRepository = new DataCarreras();
        return $carrerasRepository->getCarreras();
    }

    public function getCarrerasPag($from, $limit) {
        $carrerasRepository = new DataCarreras();
        return $carrerasRepository->getCarrerasPag($from, $limit);
    }

    public function getCarrerasByInstitucion($idInstitucion) {
        $carrerasRepository = new DataCarreras();
        return $carrerasRepository->getCarrerasByInstitucion($idInstitucion);
    }

    public function getCarrerasByInstitucionPag($from, $limit, $idInstitucion) {
        $carrerasRepository = new DataCarreras();
        return $carrerasRepository->getCarrerasByInstitucionPag($from, $limit, $idInstitucion);
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

    public function getUsuarioByNombreUsuario() {
        $usuariosRepository = new DataUsuarios();
        return $usuariosRepository->getUsuarioByNombreUsuario($nombreUsuario);
    }

}

?>