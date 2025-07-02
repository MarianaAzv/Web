<?php
include_once __DIR__. './../Modelo/Conexao.php';
include_once __DIR__. './../Modelo/Usuario.php';
include_once __DIR__. './../Modelo/UsuarioDAO.php';

class AuthController{
    public function login(){
        $dao=new UsuarioDAO();

        if(isset($_POST['email']) && isset($_POST['senha'])){
            $email=$_POST['email'];
            $senha=$_POST['senha'];

           $usr=$dao->autenticar($email,$senha);
           // echo var_dump($usr);
           // exit;
            if(isset($usr)){
                $_SESSION['usr']=$usr->id;
                header("Location:rota.php?rota=home");

            }else{
                header("Location:rota.php");
            }
        } else{
            header("Location:rota.php");  
        }
    }
}

?>