<?php

namespace Alura\Architecture;

class Email {
    private string $email_adress;

    public function __construct(string $adress)
    {
        if(filter_var($adress, FILTER_VALIDATE_EMAIL) === false) {
            throw new \InvalidArgumentException('Invalid email adress.');
        }

        $this->email_adress = $adress;
    }

    public function __tostring(): string
    {
        return $this->email_adress;
    }
}