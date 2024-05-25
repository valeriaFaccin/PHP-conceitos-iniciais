<?php

namespace POO\Src\Modelo;

use Throwable;

class nomeInvalidoException extends \DomainException{
    public function __construct(string $nomeTitular){
        $message = "$nomeTitular é inválido! Nome precisa ter mais de dois caracteres" . PHP_EOL;
        parent::__construct($message);
    }
}