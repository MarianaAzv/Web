<?php
include_once __DIR__. './../Modelo/Conexao.php';
include_once __DIR__. './../Modelo/Usuario.php';
include_once __DIR__. './../Modelo/UsuarioDAO.php';

class AuthUsuarioController{
public function Cadastrar(){
    $dao=new UsuarioDAO();

    if(isset($_POST['nome']) && isset($_POST['senha']&& isset($_POST['email']))){
        $nome=$_POST['nome'];
        $senha=$_POST['senha'];
        $email=$_POST['email'];

       $usr=$dao-> insere($nome,$email,$senha);
}
}
}

?>