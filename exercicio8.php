<?php

$contador = 0;
$soma = 0;


for($i = 1; $i <= 100; $i++){
    $soma += $i;
    $total=  $contador + $i;
    $resultado = $i + $soma;
    
    echo "soma é:  $total + $soma = $resultado <br>";
    
}


?>