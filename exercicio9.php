<?php
$contador = 0;

for($i = 1; $i <= 50; $i++){

    $contador = sqrt($i);
    $arredondado = round($contador, 2);
    echo "a raiz quadrada é: $arredondado <br>";
}

?>