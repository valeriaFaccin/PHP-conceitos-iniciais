<?php

namespace Alura\Architecture\Aluno;

use Alura\Architecture\Email;

class Aluno {
    private string $cpf;
    private string $name;
    private Email $email;
    private array $telefones;

    public function adicionarTelefone(string $ddd, string $number)
    {
        $this->telefones[] = new Telefone($ddd, $number);
    }
}