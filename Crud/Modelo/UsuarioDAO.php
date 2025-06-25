<?php
include_once __DIR__.'./Conexao.php';
include_once __DIR__.'./Usuario.php';

class UsuarioDAO{
    private $pdo;
    public   function __construct(){
        $this ->pdo= Conexao::getConexao();

    }
    public function insere(Usuario $usuario){
        $sql="INSERT INTO usuarios(nome,email,senha) VALUES(?,?,?)";
        $stmt=$this->pdo->prepare($sql);
        //$stmt->bindParamns(1,$usuario->nome);        
        $stmt->execute([$usuario->nome,$usuario->email,$usuario->senha]);
    }

    public function busca_usr_email($email){
        $sql="SELECT * FROM usuarios WHERE email =?";
        $stmt =$this->pdo->prepare($sql);
        $stmt->execute([$email]);
        $registro=$stmt->fetch();
        $urs=new Usuario($registro["nome"],$registro["email"],$registro["senha"]);
        $urs->id=$registro["id"];
        return $urs;
    }

    public function lista_todos(){
        $sql="SELECT * FROM usuarios ";
        $stmt =$this->pdo->prepare($sql);
        $stmt->execute();
        $registros=$stmt->fetchAll();
        $usuarios=array();
        foreach($registros as $registro){
            $usr=new Usuario($registro["nome"],$registro["email"],$registro["senha"]);
            $usr->id=$registro["id"];
            array_push($usuarios,$usr);
        }
        return $usuarios;
      
    }

    public function autenticar($email,$senha){
       // $sql="SELECT * FROM usuarios WHERE email =? And senha =?";
       // $stmt =$this->pdo->prepare($sql);
       // $stmt->execute([$email],[$senha]);
       // $registro=$stmt->fetch();
      //  $urs=new Usuario($registro["nome"],$registro["email"],$registro["senha"]);
      //  if($urs != null){
        //    return urs;
      //  } else{
       //     return null;
       // }

      $urs= $this->busca_usr_email($email);
if(isset($urs)&& $urs->senha==$senha){
    return $urs;
}
return null;
   
    }
}