<?php

// cirando a array lista de frutas
$lista_frutas= array("Banana", "Maça", "Morango", "Uva", "Caqui", "Melancia");

echo '<pre>';
print_r ($lista_frutas);
echo $lista_frutas[0]; //iso mostra "Maça"
echo "<hr>";
echo '</pre>';

echo '<pre>';
//Alterando o Valor 0 -> Banana para melancia
$lista_frutas[0] = "Melancia";
print_r ($lista_frutas);
echo '</pre>';

echo "<br>";

echo $lista_frutas[0];

?>