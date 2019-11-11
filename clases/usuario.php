<?php
class Usuario {
    private $email;
    private $nombre;
    private $apellido;
    private $password;
    private $avatar;
    private $tarjeta;

    public function __construct(string $nombre, string $apellido,string $email,string $password, string $avatar,Tarjeta $tarjeta){

    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->email=$email;
    $this->avatar=$avatar;
    $this->tarjeta=$tajeta;

    }

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

    public function setTarjeta(Tarjeta $tarjeta)
    {
        $this->tarjeta = $tarjeta;
    }
    public function getTarjeta(): Tarjeta
    {
        return $this->tarjeta;
    }
}


?>
