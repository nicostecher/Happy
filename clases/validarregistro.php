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
  public function validarNombre(){
      if(strlen($this->nombre)==0){
        $errores["nombre"][]="completa el nombre";
      }
    }
      public function validarApellido(){
          if(strlen($this->apellido)==0){
            $errores["apellido"][]="completa el apellido";
          }
      }

      public function validarEmail(){
          if(strlen($this->email)==0){
              $errores["email"][]="no completaste el mail";
          }
        if(!filter_var($this->email, FILTER_VALIDATE_MAIL)){
          $errores["email"][]="el formato de email no es el correcto";

          }
      }

      public function
}



    ?>