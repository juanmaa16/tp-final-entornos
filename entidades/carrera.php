<?php

class Carrera {

    private $nombre;
    private $descripcion;
    private $incumbencias;
    private $id;
    private $planEstudio;
    private $idInstitucion;
    private $areaInteres;

    function __construct($id, $nombre, $incumbencias, $planEstudio, $idInstitucion, $descripcion, $areaInteres) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->incumbencias = $incumbencias;
        $this->planEstudio = $planEstudio;
        $this->idInstitucion = $idInstitucion;
        $this->descripcion = $descripcion;
        $this->areaInteres = $areaInteres;
    }

    public function getAreaInteres() {
        return $this->areaInteres;
    }

    public function setAreaInteres($areaInteres) {
        $this->areaInteres = $areaInteres;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdInstitucion() {
        return $this->idInstitucion;
    }

    public function setIdInstitucion($id) {
        $this->idInstitucion = $idInstitucion;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getPlanEstudio() {
        return $this->planEstudio;
    }

    public function setPlanEstudio($planEstudio) {
        $this->planEstudio = $planEstudio;
    }

    public function getIncumbencias() {
        return $this->incumbencias;
    }

    public function setIncumbencias($incumbencias) {
        $this->incumbencias = $incumbencias;
    }
}

?>