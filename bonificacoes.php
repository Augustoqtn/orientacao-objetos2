<?php

require_once 'autoload.php';

use Alura\Banco\Servico\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor, EditorVideo};

$umDesenvolvedor = new Desenvolvedor('Augusto Brito', new CPF('123.123.123-10'), 1000);

$umDesenvolvedor->sobeDeNivel();

$umaFuncionaria = new Gerente('Maria Brito', new CPF('031.234.430-90',), 3000);

$umDiretor = new Diretor('Marcelo Jacobus', new CPF('234.432.235-80'), 5000);

$umEditor = new EditorVideo('Carlos Eduardo', new CPF('879.908.268-20'), 1500);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);



echo $controlador->recuperaTotal();
