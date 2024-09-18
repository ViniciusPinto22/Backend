<?php

$usuarios = [
    [   "id" => 1,
        "nome" => "Joao",
        "cidade" => "cerquilho,",
        "estado" => "SP"],
    [   "id" => 2,
        "nome" => "Maria",
        "cidade" => "Xique Xique,",
        "estado" => "BA"],
    [   "id" => 3,
        "nome" => "Pedro",
        "cidade" => "Rocinha,",
        "estado" => "RJ"],
    [   "id" => 4,
        "nome" => "Vinicius",
        "cidade" => "Ipero,",
        "estado" => "SP"],
    [   "id" => 5,
        "nome" => "Felipe",
        "cidade" => "Piraraquara",
        "estado" => "PA"],
];

$busca = "cerquilho";


echo '<pre>';
print_r($usuarios);
echo '</pre>';

echo $busca;