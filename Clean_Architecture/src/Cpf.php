<?php

namespace Alura\Architecture;

class Cpf {
    private string $number;

    public function __construct(string $number)
    {
        $number = filter_var($number, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($number === false) {
            throw new \InvalidArgumentException('Invalid CPF number.');
        }

        $this->number = $number;
    }

    public function __tostring(): string
    {
        return $this->number;
    }
}