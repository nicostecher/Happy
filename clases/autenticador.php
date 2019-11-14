<?php
require_once("clases/autoload.php");

    class Autenticador{

        public function buscarUsuario($email){
            
            $json=file_get_contents("archivosDelUsuario.json");
            
            $usuarios=json_decode($json,true);

            foreach($usuarios as $usuario){
                if($usuario["email"]=$email){
                    return $usuario;
                }
            }
        }

        /*
        public function guardarCookie(){

        }
        */

        public function loguear(){
             if (isset($_COOKIE['recordarme'])){
                $_SESSION['email'] = $_COOKIE["recordarme"];
            }
        }
    
        public function desloguear(){
            session_destroy();
            setcookie("recordarme",$email, time()-1);
        }
    
       
    }

/*

function estaElUsuarioLogeado() {
    if (isset($_SESSION['email'])) {
        return true;
    }
    return false;
}



function logear($email) {
    //deberia de buscar al usuario en la BD
    $usuario = buscarUsuarioEmail($email);

    if ($usuario) {
     //si existe lo logeo
        $_SESSION['email'] = $email;
        $_SESSION['avatar'] = $usuario['avatar'];
    } else {
        destruirRecuerdame();
        //sino lo redirijo a login
        header('location:login.php');
    }
}

function destruirRecuerdame() {
    setcookie('recuerdame', '', time() - 1);
}

function deslogear() {
    session_destroy();
    destruirRecuerdame();
}
*/