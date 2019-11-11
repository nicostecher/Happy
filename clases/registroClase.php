<?php
class Registro {
  //ATRIBUTOS//
  private $email;
  private $password;
  private $avatar;
  private $nombre;
  private $apellido;
  private $datos;

  //CONSTRUCT//
  public function __construct(string $email,string $password, string $avatar,string $nombre, string $apellido){
    $this->email=$email;
    $this->password=$password;
    $this->avatar=$avatar;
    $this->nombre=$nombre;
    $this->apellido=$apellido;
  }

  //SETTERS Y GETTERS//

  public function setNombre(string $nombre){
    $this->nombre=$nombre;
  }

  public function getNombre():string{
    return $this->nombre;
  }

  public function setApellido(string $apellido){
    $this->apellido=$apellido;
  }

  public function getApellido():string{
    return $this->apellido;
  }

  public function setEmail(string $email)
  {
      $this->email = $email;
  }

  public function getEmail(): string
  {
      return $this->email;
  }

  public function setPassword(string $password)
  {
      $this->password = $password;
  }

  public function getPassword(): string
  {
      return $this->password;
  }

  public function setAvatar(string $avatar)
  {
      $this->avatar = $avatar;
  }
  public function getAvatar(): string
  {
      return $this->avatar;
  }

  // //

  public function redirigirABD(BaseDatos $bd){
    // USO put ????---- JUNTO TODOS LOS DATOS EN UN ARRAY Y ESTE ARRAY LO MANO A BASE DE DATOS?? //
  }

  public function validarse(Validador $validador){
    //????? //
  }
}


 ?>
