<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Novo Hamburgo', 'canudos', 'potiguara', '1310');
$segundoEndereco = new Endereco('Sapiranga', 'Centro', 'bonifacio', '45B');

// echo $umEndereco->cidade; //perguntar para o marcelo sobre o __get e o __set.
// exit();

echo $umEndereco . PHP_EOL;
echo $segundoEndereco;