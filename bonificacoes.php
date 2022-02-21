<?php

require_once 'autoload.php';

use Alura\Banco\Servico\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario;



$umFuncionario = new Funcionario('Augusto Brito',new CPF('123.123.123-10'),'desenvolvedor',1000);

$umaFuncionaria = new Funcionario('Maria Brito',new CPF('031.234.430-90',),'gerente',3000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umFuncionario);
echo $controlador->recuperaTotal();


