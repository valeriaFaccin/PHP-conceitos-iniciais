<?php

namespace Alura\Banco\Modelo;

interface Autenticavel
{
    public function autenticarSenha(string $senha): bool;
}
