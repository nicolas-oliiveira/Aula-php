<?php //iniciando o código
require_once("Pessoa.class.php");//importando classe pessoa

$pessoa = new Pessoa();//instanciando classe
$pessoa->setNome("Nicolas Lopes de Oliveira");//atribuindo conteúdo
echo $pessoa->getNome();//exibindo os dados

//encerramento do código
?>