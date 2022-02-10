<?php

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct($nome,CPF $cpf,$cargo)
    {
        parent::__construct($nome,$cpf);
        $this->cargo = $cargo;
    }

    public function recuperaCargo()
    {
        return $this->cargo;
    }

    public function alteraNome($nome):void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

}