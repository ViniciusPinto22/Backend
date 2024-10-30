<?php


class Aluno{
 
public $nome = "Vini";
public $idade = 16;
public $curso = 'Biologia';


function exibirDadosAluno(){
    return "$this->nome de $this->idade anos está inscrita no curso de $this->curso";
}
function AlterCurso($alterarcurso){
    $this->curso = $alterarcurso;
}

}

$y = new Aluno();
echo $y -> exibirDadosAluno();
echo '<hr>';
$y->AlterCurso('Jornalismo');
echo $y->exibirDadosAluno();
echo '<hr>';


?>