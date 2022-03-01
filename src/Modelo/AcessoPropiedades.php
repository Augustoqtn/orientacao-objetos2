<?php

namespace Alura\Banco\Modelo;

trait AcessoPropiedades
{
    public function __get(string $nomeAtributo)
    {
        $metudo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metudo();
    }
}
