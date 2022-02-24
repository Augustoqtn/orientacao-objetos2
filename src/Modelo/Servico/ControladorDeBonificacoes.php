<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Funcionario;

// isso é uma classe de serviço:
class ControladorDeBonificacoes
{

    private $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }


    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}
