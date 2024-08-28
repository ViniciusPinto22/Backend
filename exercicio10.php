<?php

// cirando a array lista de numeros
$numeros= array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo '<pre>';
print_r ($numeros);
echo $numeros[0]; //isso mostra "os numeros"
echo '<br>';
echo $numeros[4];
echo '<br>';
echo $numeros[9];
echo "<hr>";
echo '</pre>';

echo '<pre>';
//Alterando o Valor 0 -> 1 para 100
$numeros[0] = "100";
$numeros[4] = "500";
$numeros[9] = "1000";
print_r ($numeros);
echo '</pre>';

echo "<br>";

echo $numeros[0];
echo '<br>';
echo $numeros[4];
echo '<br>';
echo $numeros[9];
l
?>