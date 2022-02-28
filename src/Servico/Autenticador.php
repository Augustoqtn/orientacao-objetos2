<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Diretor;


class Autenticador
{
    public function tentaLogin(Diretor $diretor, string $senha): void
    {
        if ($diretor->podeAutenticar($senha)) {
            echo 'Ok. Usauario logado com sucesso!';
        } else {
            echo 'senha incorreta!';
        }
    }
}
