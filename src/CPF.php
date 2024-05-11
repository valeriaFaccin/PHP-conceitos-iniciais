<?php

class CPF{
    private $cpf;

    public function __construct($cpf){
        $this->cpf = $cpf;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf;
    }
}