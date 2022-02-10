<?php

require_once 'autoload.php';


use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta; 


$endereco = new Endereco('Novo Hamburgo','canudos','potiguara','459-1');
$augusto = new Titular(new CPF('123.456.789-10'), 'Augusto Quintana',$endereco);
$primeiraConta = new Conta($augusto);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;


$endereco2 = new Endereco('Estancia Velha','feliz','rua torta','343');
$marcelo = new Titular(new CPF('432.123.456-80'),'Marcelo Jacobus',$endereco2);
$segundaConta = new Conta($marcelo);

echo $segundaConta->recuperaNomeTitular() . PHP_EOL;
echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta->recuperaSaldo() . PHP_EOL;

echo Conta::recuperaNumeroDeContas();
