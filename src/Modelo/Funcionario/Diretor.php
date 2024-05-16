<?php

class Diretor extends Funcionario implements Autenticavel{
    public function calculaBonificacao() : float
    {
        return $this->recuperarSalario() * 2;
    }

    public function autenticarSenha(string $senha) : bool
    {
        return $senha === '40028922';
    }
}