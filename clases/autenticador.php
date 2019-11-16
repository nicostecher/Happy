<?php
require_once("clases/autoload.php");
    class Autenticador{

            

        public function Loguear( string $email){
            $json=file_get_contents("archivosDelUsuario.json");
            $usuarios=json_decode($json,true);
            foreach($usuarios as $usuario){
                if($usuario["email"]==$email){
                    $_SESSION["email"]=$email;
                    $_SESSION["nombre"]=$nombre;       
                }
                if(isset($_POST['recordarme'])){
                 setcookie("recordarme",$email,time()+60*60*24*7);
                }
                if(isset($_SESSION["email"])){
                    header("location:profile.php");
                  }

                 }
        }
    

        public function desloguear(){
            session_destroy();
            setcookie("recordarme",$email, time()-1);
        }
    }

         

        
      

       
    
      