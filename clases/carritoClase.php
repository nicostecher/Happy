<?php
class Carrito{
  //ATRIBUTOS//
  private $producto;
  private $cantidad;
  private $total;
  private $usuario;

  //CONSTRUCTOR//
  public function __construct(Producto $producto, int $cantidad, int $total, Usuario $usuario){
    $this->producto=$producto;
    $this->cantidad=$cantidad;
    $this->total=$total;
    $this->usuario=$usuario;
  }
  //METODOS//
  public function setProducto(Producto $producto){
    $this->producto=$producto;
  }
  public function getProducto():Producto {
    return $this->producto;
  }

  public function setCantidad(int $cantidad){
    $this->cantidad=$cantidad;
  }
  public function getCantidad():int {
    return $this->cantidad;
  }

  public function setTotal(int $total){
    $this->total=$total;
  }
  public function getTotal():int {
    return $this->total;
  }

  public function seleccionarProducto(){
    //isset $producto;
  }

  public function deseleccionarProducto(){
    //!isset  $producto;
  }

  public function setUsuario(Usuario $usuario){
    $this->usuario=$usuario;
  }
  public function getUsuario():Usuario {
    return $this->usuario;
  }

}


 ?>
