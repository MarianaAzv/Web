<?php
include_once __DIR__. './Modelo/Conexao.php';
include_once __DIR__. './Modelo/Usuario.php';
include_once __DIR__. './Modelo/UsuarioDAO.php';
include_once __DIR__. './Controler/AuthController.php';
session_start();


if(!isset($_SESSION['usr'])){
    header("Location:rota.php");
}

?>

<table>
    <tr>
        <th>ID</th>
            <th>nome</th>
                <th>email</th>
</tr>
<?php

$dao=new UsuarioDAO();
$lista=$dao-> lista_todos();

echo var_dump($lista);

foreach($lista as $usuario){
    echo "<tr>";
    echo "<td>".$usuario->id."</td>";
    echo "<td>".$usuario->nome."</td>";;
    echo "<td>".$usuario->email."</td>";
    echo "</tr>";
}

?>

</table>