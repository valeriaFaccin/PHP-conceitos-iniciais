<?php

namespace POO\src\Modelo;

final class CPF{
    private $cpf;

    public function __construct(string $cpf){
        $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($cpf === false) {
           throw new \InvalidArgumentException('CPF inválido');
        }
        $this->cpf = $cpf;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf;
    }
}