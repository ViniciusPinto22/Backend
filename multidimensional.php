<?php

//criando a Array lista_coisas
$lista_coisas = [];

//criando uma Array frutas dentro Array lista_coisas
$lista_coisas ['frutas'] = ['banana', 'Maça', 'Morango', 'Uva'];

//Criando uma Array pessoas, dentro da Array lista_coisas
$lista_coisas ['pessoas'] = ['joão', 'José', 'Maria'];

$lista_coisas ['frutas'][2] = 'Abacaxi';
$lista_coisas ['pessoas'][1] = 'Carlos';

echo $lista_coisas ['frutas'][2];
echo $lista_coisas ['pessoas'][1];



echo '<pre>';
print_r($lista_coisas);
echo '</pre>';


?>