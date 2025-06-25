<?php

include_once __DIR__. './Modelo/Conexao.php';
include_once __DIR__. './Modelo/Usuario.php';
include_once __DIR__. './Modelo/UsuarioDAO.php';
include_once __DIR__. './Controler/AuthController.php';
if(isset($_GET['rota'])){
    $rota=$_GET['rota'];
}else{
    $rota="login";
}


switch($rota){
    case 'login':
        //header("Location:login.php");
        require "login.php";
        break;


         case 'autenticao':
         $auth=new AuthController();
        $auth->login();
             break;

             case 'home':
                require "home.php";
                break;


         default:
         echo "Rota desconhecida";
}


?>