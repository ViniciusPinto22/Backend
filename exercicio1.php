<?php

//exercicio 1

$nota1 = 7.5;
$nota2 = 3;
$nota3 = 9;


echo 'A 1 nota e: 7.5','<br/>';
echo 'A 2 nota e: 3','<br/>';
echo 'A 3 nota e: 9','<br/>';

$media = ($nota1 + $nota2 + $nota3) / 3;

echo 'a nota final é: ' . $media . '<br/>';

if ($media >=7){
    echo 'Parabens voce passou de ano';

}else{
    echo 'voce reprovou de ano';
}








?>