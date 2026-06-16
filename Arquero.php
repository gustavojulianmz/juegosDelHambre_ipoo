<?php
class Arquero extends Personaje {
    private $precision;
    private $velocidad;


    public function __construct($id, $nombre, $nivel, $puntosVida, $energia, $estado, $precision, $velocidad)
    {
        // INVOCO AL CONSTRUCTO DE LA OTRA CLASE
        parent::__construct($id, $nombre, $nivel, $puntosVida, $energia, $estado);


        // Atributos específicos del Arquero
        $this->precision = $precision;
        $this->velocidad = $velocidad;
    }




    //GETTERS Y SETERS
    public function getPrecision() {
        return $this->precision;
    }


    public function getVelocidad() {
        return $this->velocidad;
    }




    public function setPrecision($precision) {
        $this->precision = $precision;
    }


    public function setVelocidad($velocidad) {
        $this->velocidad = $velocidad;
    }


    //LOS METOS ABSTRACTOS QUE VIENENN DE LA CLASE PERSONAJE
    // Poder base: nivel * 12 + precision
    public function calcularPoderBase() {
        return $this->nivel * 12 + $this->precision;
    }


    // Poder especial: precision * 2 + velocidad
    public function calcularPoderEspecial() {
        return ($this->precision * 2) + $this->velocidad;// esta velocidad se calcula de esta forma
    }
}
