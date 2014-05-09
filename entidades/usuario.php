<?php

class Usuario {

    private $id;
    private $usuario;
    private $password;
    private $idInstitucion;

    function __construct($id, $usuario, $password, $idInstitucion) {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->idInstitucion = $idInstitucion;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getIdInstitucion() {
        return $this->idInstitucion;
    }

    public function setIdInstitucion($idInstitucion) {
        $this->idInstitucion = $idInstitucion;
    }

}

?>
