<?php

include_once __DIR__. './Modelo/Conexao.php';
include_once __DIR__. './Modelo/Usuario.php';
include_once __DIR__. './Modelo/UsuarioDAO.php';
include_once __DIR__. './Controler/AuthController.php';
include_once __DIR__. './Controler/AuthUsuarioController.php';
session_start();
if(isset($_GET['rota'])){
    $rota=$_GET['rota'];
}else{
    $rota="login";
}


switch($rota){
    case 'login':
        //header("Location:login.php");
        if(isset($_SESSION['usr'])){
            header("Location:home.php");
        }
        require "login.php";
        break;


         case 'autenticacao':
              $auth=new AuthController();
              $auth->login();
             break;

        case 'home':
            header("Location:home.php");
                break;
        
        case 'logout':
            session_destroy();
            header("Location:home.php");
            break;

            case 'Cadastro':

                header("Location:Cadastrar.php");
                break;


                case 'Inserir':
                    $auth=new AuthUsuarioController();

                    break;
         default:
         echo "Rota desconhecida";
}


?>