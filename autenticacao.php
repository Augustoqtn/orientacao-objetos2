<?php

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Servico\Autenticador;
use Alura\Banco\Modelo\CPF;

require_once 'autoload.php';

$autenticadoer = new Autenticador();
$umDiretor = new Diretor('Testee', new CPF('123.456.789-10'), 10000);

$autenticadoer->tentaLogin($umDiretor, '1234');
