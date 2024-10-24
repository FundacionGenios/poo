<?php

class Pais {
    private $id_pais;
    private $nombre;
    private $presidente;
    private $cantidadPoblacion;
    private $cantidadDepartamentos;

    public function __construct($id_pais, $nombre, $presidente, $cantidadPoblacion, $cantidadDepartamentos) {
        $this->id_pais = $id_pais;
        $this->nombre = $nombre;
        $this->presidente = $presidente;
        $this->cantidadPoblacion = $cantidadPoblacion;
        $this->cantidadDepartamentos = $cantidadDepartamentos;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPresidente() {
        return $this->presidente;
    }

    public function getCantidadPoblacion() {
        return $this->cantidadPoblacion;
    }

    public function getCantidadDepartamentos() {
        return $this->cantidadDepartamentos;
    }

    public function getIdPais() {
        return $this->id_pais;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setPresidente($presidente) {
        $this->presidente = $presidente;
    }

    public function setCantidadPoblacion($cantidadPoblacion) {
        $this->cantidadPoblacion = $cantidadPoblacion;
    }

    public function setCantidadDepartamentos($cantidadDepartamentos) {
        $this->cantidadDepartamentos = $cantidadDepartamentos;
    }

    public function setIdPais($id_pais) {
        $this->id_pais = $id_pais;
    }

}


?>