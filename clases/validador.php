<?php

class Validador {
  
    public function validarLogin(string $email, string $password): array
    {
        $array = [];

        $email = trim($email);
        if ($this->validarEmail($email)) {
            $array['email'] = 'El email es inválido';
        }
        if ($this->validarVacio($password)) {
            $array['password'] = 'Ingresa la contraseña';
        }
        if (empty($array)) {
            $usuario = $this->bd->buscarUsuarioEmail($email);
            if ($usuario === null) {
                $array['email'] = 'Usuario o clave inválido';
            } else if (!password_verify($password, $usuario->getPassword())) {
                $array['email'] = 'Usuario o clave inválido';
            }
        }

        return $array;
    }

    public function validarRegistro(): array
    {

    }

    /**
     * retorna true cuando el $email no sea valido
    */
    public function validarEmail(string $email): bool
    {
        return !filter_var($email, FILTER_VALIDATE_EMAIL);
    }

   
    public function validarVacio(string $valor): bool
    {
        return strlen(trim($valor)) === 0;
    }







}
