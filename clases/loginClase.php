<?php
class Login{
  private $email;
  private $password;

//CONSTRUCTOR//
  public function __construct(string $email,string $password){
    $this->email=$email;
    $this->password=$password;
  }
//SETTERS Y GETTERES//
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

//OTRAS FUNCIONES//
  public function validarse(Validador){
    //????? //
  }

  public function traerBD(BaseDatos){
    //como la traigo????//
  }

}
 ?>
