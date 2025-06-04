<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Imprima todos os termos de uma P.A ate N informado pelo usuario</h2>

    <label for = "termon">Informe o indice do termo</label>

    <form action = "">
    <input id="termon" type ="text" name="n">
    <input type = "submit">
</form>

  
<?php
$a1=0;
$r=3;

$n=isset($_GET["n"])?$_GET["n"]:1

$i=1;
$termon=$a1;
for($i=1;$i<=$n;$i++){
   /* $termon=$a1+(i-1)*$r;*/
    echo "Termo:".$termon;
    $termon+=$r;
}
  
    ?>
</body>
</html>