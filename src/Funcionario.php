<?php

class Funcionario
{
    private string $nome;
    private string $cpf;
    private string $cargo;

    public function __construct($nome,$cpf,$cargo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

}