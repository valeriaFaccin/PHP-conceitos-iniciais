<?php

namespace POO\src\Modelo;

trait AcessaAtributo {
    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

    public function __set(string $nomeAtributo, $value)
    {
        $nomeAtributo = $value;
        return $this->nomeAtributo;
    }
}