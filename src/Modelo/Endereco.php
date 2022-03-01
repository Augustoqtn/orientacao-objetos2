<?php

namespace Alura\Banco\Modelo;

class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;


    public function __construct($cidade, $bairro, $rua, $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }


    public function recuperaCidade()
    {
        return $this->cidade;
    }

    public function recuperaBairro()
    {
        return $this->bairro;
    }

    public function recuperaRua()
    {
        return $this->rua;
    }

    public function recuperaNumero()
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __get(string $nomeAtributo)
    {
        $metudo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metudo();
    }

    public function __set($nome, $valor)
    {
        $this->$nome = $valor;
    }
}
