<?php

class BaseDatos{

  public function guardarUsuario(Usuario $usuario){
   
    $bd=file_get_contents("archivosDelUsuario.json");

    $usuarios=json_decode($bd,true);
    
    $usuario=[
      "nombre"=>$usuario->getNombre(),
      "apellido"=>$usuario->getApellido(),
      "email"=>$usuario->getEmail(),
      "password"=>Password_hash($usuario->getPassword(),PASSWORD_DEFAULT),
      "avatar"=>$usuario->getAvatar(),
    ];

    $usuarios[]=$usuario;

    $usuariosJson=json_encode($usuarios);
    
    file_put_contents("archivosDelUsuario.json",$usuariosJson);
  
    
  
  }
 
  
};




?>




  

