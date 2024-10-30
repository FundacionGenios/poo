<?php

class Mascota{
    private $nombre;
    private $edad;
    private $color;
    private $raza;


    public function __construct($nombre, $edad, $color, $raza){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->color = $color;
        $this->raza = $raza;
     
    }


 public function setNombre($nombre){
    $this->nombre = $nombre;
 }
 public function getNombre(){
    return $this->nombre;
 }

 public function setEdad($edad){
    $this->edad = $edad;
 }
 public function getEdad(){
    return $this->edad;
 }

 public function setColor($color){
    $this->color = $color;
 }
 public function getColor(){
    return $this->color;
 }

 public function setRaza($raza){
    $this->raza = $raza;
 }
 public function getRaza(){
    return $this->raza;
 }
 public function getInfo(){
    return $this->nombre."  ".$this->edad." ".$this->color." ".$this->raza;
 }



}



