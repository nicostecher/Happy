<?class usuario {
    private $email;
    private $nombre;
    private $apellido
    private $password;
    private $avatar;

    public function __constrcut(string $nombre, string $apellido,string $email,string $password, string $avatar){

    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->email=$email;
    $this->avatar=$avatar;

    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
    public function setAvatar(string $avatar)
    {
        $this->avatar = $avatar;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
    public function getAvatar(): string
    {
        return $this->avatar;
    }

}

}
?>