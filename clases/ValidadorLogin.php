<?php

class ValidadorLogin {
  private $email;
  private $password;
  private $errores = [];

    public function __construct(string $email, string $password)
    {
      $this->email = $email;
      $this->password = $password;

      $completeSuEmail = validarEmail();
      $completeSuContrasena =validarContrasena();
      $noEsUnMail= noEsUnEmail();

    }
    public function validar(){
      validarEmail();
      noEsUnEmail();
      validarContrasena();
      return $this->errores;
    }
    //VALIDACION//
    public function validarEmail(){
      if (strlen($this->email)==0){
        $this->errores['email'][] = "Complete su email <br>";
      }
    }

    public function noEsUnEmail(){
      if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
       $this->errores['email'][] = "El campo no es un email <br>";
      }
    }

    public function validarContrasena() {
    if (strlen ($this->password)==0) {
       $this->errores['password'][]= "La contraseña esta vacia <br>";
      }
    }
}
