<?php

include_once 'Usuario.php';
session_start();




if(isset($_GET['nome']) && isset($_GET['email'])&& isset($_GET['senha'])){
    


    $u=new Usuario($_GET['nome'],$_GET['email'],$_GET['senha']);
  




} else {
  $u=null;

}

if(!isset($a)){
    $a = array();
}

if(isset($_SESSION['ulist'])){
    $a=$_SESSION['ulist'];
}

if(isset($u)){
    array_push($a,$u);
    $_SESSION['ulist']=$a;
}


echo "<table>";
echo "<tr> <td> id </td>";
echo "     <td> nome</td>";
echo "     <td> email</td>";
echo"      <td>senha</td>";
echo "</tr>";
foreach($a as $us){
    echo "<tr> 
           <td>".$us->id."</td>";
    echo " <td>".$us->nome."</td>";
    echo " <td>".$us->email."</td>";
    echo " <td>".$us->senha."</td>";
    echo"</tr>";
}
echo "</table>";


?>