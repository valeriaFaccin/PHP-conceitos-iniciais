<?php

interface Autenticavel{
    public function autenticarSenha(string $senha): bool;
}