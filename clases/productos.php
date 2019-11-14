<?php class Producto{
    private $nombre;
    private $descripcion;
    private $cantidad;
    private $valor;
    private $disponibilidad;

    public function __contruct(string $nombre, string $descripcion, integer $cantidad, float $valor, boolean $disponibilidad) {

       $this->nombre=$nombre;
       $this->descripcion=$descripcion;
       $this->cantidad=$cantidad;
       $this->valor=$valor;
       $this->disponibilidad=$disponibilidad;
    }

    public function setNombre(string $nombre){
        $this->nombre=$nombre;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function setDescripcion(string $descripcion){
        $this->descripcion=$descripcion;
    }

    public function getDescripcion():string{
        return $this->descripcion;
    }

    public function setCantidad(integer $cantidad){
        $this->cantidad=$cantidad;
    }

    public function getCantidad() :integer{
        return $this->cantidad;
    }

    public function setValor(float $valor){
        $this->valor=$valor;
    }

    public function getValor() : float{
        return $this->valor;
    }

    public function setDisponibilidad(boolean $disponibilidad){
        $this->disponibilad=$disponibilidad;
    }

    public function getDisponibilidad():boolean{
        return $this->disponibilidad;
    }
    }
?>
