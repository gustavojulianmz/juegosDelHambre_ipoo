
<?php
// CLASE ABSTRACTA PERSONAJE
abstract class Personaje {
    protected $id;
    protected $nombre;
    protected $nivel;
    protected $puntosVida;
    protected $energia;
    protected $duelosGanados;
    protected $duelosPerdidos;
    protected $estado;
    protected $arma;


    // El constructor SI es público y va ADENTRO de la clase
    public function __construct($id, $nombre, $nivel, $puntosVida, $energia, $estado) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->nivel = $nivel;
        $this->puntosVida = $puntosVida;
        $this->energia = $energia;
        $this->duelosGanados = 0;
        $this->duelosPerdidos = 0;
        $this->estado = $estado;
        $this->arma = null; // Arranca sin arma
    }


   
    // METODOS GETTERS Y SETTERS
 


    public function getId() {
        return $this->id;
    }


    public function getNombre() {
        return $this->nombre;
    }


    public function getNivel() {
        return $this->nivel;
    }


    public function getPuntosVida() {
        return $this->puntosVida;
    }


    public function getMedia() {
        return $this->energia;
    }


    public function getEnergia() {
        return $this->energia;
    }


    public function getDuelosGanados() {
        return $this->duelosGanados;
    }


    public function getDuelosPerdidos() {
        return $this->duelosPerdidos;
    }


    public function getEstado() {
        return $this->estado;
    }


    public function getArma() {
        return $this->arma;
    }


    // SETTERS
    public function setId($id) {
        $this->id = $id;
    }


    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }


    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }


    public function setPuntosVida($puntosVida) {
        $this->puntosVida = $puntosVida;
    }


    public function setEnergia($energia) {
        $this->energia = $energia;
    }


    public function setDuelosGanados($duelosGanados) {
        $this->duelosGanados = $duelosGanados;
    }


    public function setDuelosPerdidos($duelosPerdidos) {
        $this->duelosPerdidos = $duelosPerdidos;
    }


    public function setEstado($estado) {
        $this->estado = $estado;
    }


    public function setArma($arma) {
        $this->arma = $arma;
    }




    // METODOS DE COMPORTAMIENTO




    public function recibirDanio($cantidad) {
        // Toma la vida actual del personaje y le resta la cantidad que entrO por parámetro
        $this->puntosVida = $this->puntosVida - $cantidad;


        // Luego evalúa si quedó fuera de combate o no (Todo ADENTRO del método)
        if ($this->puntosVida <= 0) {
            $this->puntosVida = 0;
            $this->estado = 'retirado';
        } elseif ($this->puntosVida <= 30) {
            // Acá verifica si quedó herido
            $this->estado = 'lesionado';
        }
    }


    public function recuperarVida($cantidad) { //PREGUNTAR SI ESTO ESTA BIEN O IMPLEMENTO UNAS REGLAS PROPIAS
        if($this->estado == 'retirado'){
            return; // si el personaje esta retirado ya fue
        }


        $this->puntosVida = $this->puntosVida + $cantidad; // sumamos la vida


        // Regla 1 no puede pasar de 100
        if ($this->puntosVida > 100) {
            $this->puntosVida = 100;
        }


        // Regla 2 si superó los 30 puntos y estaba lesionado vuelve a estar disponible
        if ($this->puntosVida > 30 && $this->estado === 'lesionado') {
            $this->estado = 'disponible';
        }
    }




    //metodo abstracto, sin cuerpo Q LUEGO VA HACER INVOCADO EN LAS CLASES DERIVADAS
     abstract public function calcularPoderBase();




     //Metodo abstracto PODER ESPECIAL
     abstract public function calcularPoderEspecial();






}
