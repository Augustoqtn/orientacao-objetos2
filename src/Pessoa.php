<?php
class Pessoa
{
    public string $nome;
    public CPF $cpf;

    public function __construct($nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;     
    }

    public function recuperaNome():string
    {
        return $this->nome;
    }

    public function recuperaCpf():string
    {
        return $this->cpf->recuperaNumero();
    }

    public function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}