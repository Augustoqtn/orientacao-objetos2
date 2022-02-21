<?php
namespace Alura\Banco\Modelo;

require_once 'autoload.php';

class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct($nome,CPF $cpf,$cargo, float $salario)
    {
        parent::__construct($nome,$cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
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

    public function recuperaSalario():float
    {
        return $this->salario;
    }

    public function calculaBonificacao():float
    {
        return $this->salario * 0.1;
    }
}