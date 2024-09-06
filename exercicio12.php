<?php

$cadastro = [];

$cadastro ['email']=['abc@gmail.com','def@gmail.com','ghi@gmail.com','123@gmail.com','456@gmail.com'];

$cadastro ['nome']=['guilherme','pablo','pedro','gabriel','felipe'];

echo'<pre>';
print_r($cadastro);
echo'<pre>';

echo $cadastro ['email'][0] = 'Aluno@senai.br';
echo '<br>';
echo $cadastro ['nome'][1] = 'Senai';
echo '<br>';
echo $cadastro ['email'][2];
echo '<br>';
echo $cadastro ['nome'][3];

echo'<pre>';
print_r($cadastro);
echo'<pre>';

?>