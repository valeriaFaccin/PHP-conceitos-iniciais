<?php

namespace Alura\Architecture\Aluno;

class Telefone {
    private string $ddd;
    private string $number;

    public function __construct(string $ddd, string $number)
    {
        $this->dddValidity($ddd);
        $this->numberValidity($number);
    }

    private function dddValidity(string $ddd): void
    {
        if(strlen($ddd) < 2){
            throw new \InvalidArgumentException('Invalid input');
        }
    }

    private function numberValidity(string $number): void
    {
        if(strlen($number) < 9) {
            throw new \InvalidArgumentException('Invalid Input');
        }
    }
}