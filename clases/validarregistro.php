<?php
require_once("clases/autoload.php");
class validarRegistro {

  //ATRIBUTOS//
private $email;
private $password;
private $confirmarPassword;
private $avatar;
private $nombre;
private $apellido;
private $errores=[];

//CONSTRUCTOR//
public function __construct( string $email, string $password, string $confirmarPassword,  $avatar, string $nombre,  string $apellido){
  $this->email = $email;
  $this->password = $password;
  $this->confirmarPassword = $confirmarPassword;
  $this->avatar = $avatar;
  $this->nombre = $nombre;
  $this->apellido = $apellido;
}



public function validar(){  
    $errores=[];
    if(strlen($this->nombre)==0){
      $errores["nombre"]="completa el nombre";
    
    }
  
        if(strlen($this->apellido)==0){
          $errores["apellido"]="completa el apellido";
         
        }
        
    
        if(strlen($this->email)==0){
            $errores["email"]="completa el email";
        }
      if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
        $errores["email"]="el formato de email no es el correcto";
  
      }


       if(strlen($this->password)==0){
          $errores["password"]="completa la constrasena";
       }

      if(strlen($this->confirmarPassword)==0){
          $errores["confirmarPassword"]="reescribi la contrasena";
      }

      if($this->password!=$this->confirmarPassword){
          $errores["password"]="las constrasenas no coinciden";
       } 
     
          if(($this->avatar["error"]!=0)){
              $errores["avatar"]="hay un error en la imagen";
          }else{
           $ext=pathinfo($this->avatar["name"],PATHINFO_EXTENSION);
          
          if ($ext !="jpg" && $ext!="jpeg" && $ext !="png" ){
              $errores["avatar"]="el formato de imagen no es correcto";
          }
        
      }
      return $errores; 
    }  

}




    ?>