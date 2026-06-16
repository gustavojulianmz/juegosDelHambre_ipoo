<?php
class Arma {




private $id;
private $nombre;
private $tipo;
private $danioBase;
private $nivelMinimo;
private $estado; //puede tomar 3 valores; disponible, equipada, rota.




//CONSTRUCTOR
public function __construct($id, $nombre, $tipo, $danioBase, $nivelMinimo, $estado) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->danioBase = $danioBase;
        $this->nivelMinimo = $nivelMinimo;
        $this->estado = $estado;
    }




    //GETTERS Y SETTERS


    public function getId() {
        return $this->id;
    }


    public function getNombre() {
        return $this->nombre;
    }


    public function getTipo() {
        return $this->tipo;
    }


    public function getDanioBase() {
        return $this->danioBase;
    }


    public function getNivelMinimo() {
        return $this->nivelMinimo;
    }


    public function getEstado() {
        return $this->estado;
    }




    public function setId($id) {
        $this->id = $id;
    }


    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }


    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }


    public function setDanioBase($danioBase) {
        $this->danioBase = $danioBase;
    }


    public function setNivelMinimo($nivelMinimo) {
        $this->nivelMinimo = $nivelMinimo;
    }


    public function setEstado($estado) {
        $this->estado = $estado;
    }






    //METODOS
    public function calcularDanio(){} //CONSULTAR DE DONDE SACO LOS PORCENTAJES!!








   //DEBRIAMOS TENER UN PROPIETARIO DEL ARMA?? O ES EL PERSONAJE EL PROIETARIO?? CONSULTAR
    public function puedeSerEquipadaPor(Personaje $personaje){


    }
}