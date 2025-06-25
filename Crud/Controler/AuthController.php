<?php
include_once __DIR__. './../Modelo/Conexao.php';
include_once __DIR__. './../Modelo/Usuario.php';
include_once __DIR__. './../Modelo/UsuarioDAO.php';

class AuthController{
    public function login(){
        $dao=new UsuarioDAO();

        if(isset($_POST['email']) && isset($_POST['senha'])){
            $login=$_POST['email'];
            $senha=$_POST['senha'];

           $usr=$dao->autenticar($email,$senha);

            if(!isset($urs)){
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