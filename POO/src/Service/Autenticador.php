<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function login(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->autenticarSenha($senha)) {
            echo "Usuário logado no sistema" . PHP_EOL;
        } else {
            echo "Senha incorreta." . PHP_EOL;
        }
    }
}
