<?php

$numeros = [1,2,3,4,5,6,7,8,9];


$soma = array_sum($numeros);


$maior = max($numeros);


$menor = min($numeros);


echo "Array: " . implode(", ", $numeros) . "<br>";
echo "Soma: $soma<br>";
echo "Maior número: $maior<br>";
echo "Menor número: $menor<br>";
?>