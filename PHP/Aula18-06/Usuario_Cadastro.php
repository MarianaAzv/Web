<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="Usuario_listar.php" method="Get">

<label for = "nome">Nome</label>
<?php if(isset($_GET["nome"])){ ?>
<input id ="nome" type= "String" name="nome" placeholder ="insira o seu nome" value="<?php echo
      $_GET["nome"] ?>">
<?php } else { ?>
   <input id ="nome" type= "String" name="nome" placeholder ="insira o seu nome" >
   <?php
  } ?>

  

<label for = "email">Email</label>
   <input id ="email" type= "" name="email" value ="<?php
    echo isset($_GET["email"])?$_GET["email"]:"";
   ?>">

<label for = "senha">Senha</label>
   <input id ="senha" type= "" name="senha" value ="<?php
    echo isset($_GET["senha"])?$_GET["senha"]:"";
   ?>">

    <input type="submit">

</form>



</body>
</html>

