<?php
 class Conexao{
    public static function getConexao(){

       // mysqli__Connect("localhost","usuario","senha","bd");

        //Class PDO conection 
       //new PDO('mysql:host=localhost;dbname=test',$user,$pass);
      //pode passar outras constates/parametros(SITE da documentação: php.net)

        return new PDO('mysql:host=localhost;dbname=crud',"root","admin", [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]) ;
    }
 }


?>