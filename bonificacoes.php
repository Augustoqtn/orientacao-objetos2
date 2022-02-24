<?php

require_once 'autoload.php';

use Alura\Banco\Servico\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Diretor, Funcionario, Gerente, Desenvolvedor};

$umDesenvolvedor = new Desenvolvedor('Augusto Brito', new CPF('123.123.123-10'), 'desenvolvedor', 1000);

$umDesenvolvedor->sobeDeNivel();

$umaFuncionaria = new Gerente('Maria Brito', new CPF('031.234.430-90',), 'gerente', 3000);

$umDiretor = new Diretor('Marcelo Jacobus', new CPF('234.432.235-80'), 'diretor', 5000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->recuperaTotal();
