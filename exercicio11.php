<?php

$cadastro = [];

$cadastro  ['Usuarios'] = ['joão', 'Maria', 'Pedro'];
$cadastro  ['Senha'] = ['1234', 'abcd', '5678'];

echo '<pre>';
print_r($cadastro);
echo '</pre>';

echo 'Os itens Maria e abcd foram alterados por: <br>';
$cadastro ['Usuarios'][1] = 'Ana';
$cadastro ['Senha'][1] = 'efgh';

echo $cadastro ['Usuarios'][1] = 'Ana';
echo '<br>';
echo $cadastro ['Senha'][1] = 'efgh';

echo '<pre>';
print_r($cadastro);
echo '</pre>';




?>