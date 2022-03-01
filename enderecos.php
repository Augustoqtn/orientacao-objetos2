<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Novo Hamburgo', 'canudos', 'potiguara', '1310');
$segundoEndereco = new Endereco('Sapiranga', 'Centro', 'bonifacio', '45B');

echo $umEndereco->bairro = 'Ideal';        //pesquisar mais sobre __get e o __set.
exit();

echo $umEndereco . PHP_EOL;
echo $segundoEndereco;