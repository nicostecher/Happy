<?php
require_once("autoload.php");

class validarregistro {
//ATRIBUTOS//
private $email;
private $password;
private $avatar;
private $nombre;
private $apellido;
private $errores=[];

//CONSTRUCT//
public function __construct(string $email,string $password, string $avatar,string $nombre, string $apellido){
  $this->email=$email;
  $this->password=$password;
  $this->avatar=$avatar;
  $this->nombre=$nombre;
  $this->apellido=$apellido;
}


} 



    ?>