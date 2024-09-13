<?php

$nome = array("vinicius", "guilherme", "pablo", "pedro", "maria", "vitoria", "arthur", "anna", "felipe", "daniel");

$procurar = "pablo";

$indice = array_search($procurar, $nome);


if ($indice !== false) {

    echo "$procurar foi encontrada na posição: " . $indice;
} else {

    echo "$procurar não foi encontrada na lista de frutas.";
}











?>