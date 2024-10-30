<?php


class Livro{
 
public $titulo = "Percy jackson";
public $autor = 'Rick Riordan';
public $anoPublicacao = '2005';


function exibirDetalhes(){
    return " O livro $this->titulo escrito por $this->autor , foi publicado em $this->anoPublicacao";
}
function AlterAnoPublicacao($alterarAnoPubli){
    $this->anoPublicacao = $alterarAnoPubli;
}

}

$y = new Livro();
echo $y -> exibirDetalhes();
echo '<hr>';
$y->AlterAnoPublicacao('2010');
echo $y->exibirDetalhes();
echo '<hr>';


?>