<?php

namespace POO\Src\Modelo;

interface Autenticavel{
    public function autenticarSenha(string $senha): bool;
}