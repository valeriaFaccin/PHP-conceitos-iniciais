<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Leilao;

class EnviarEmail
{
    public function notificarFinalizacaoLeilao(Leilao $leilao): void
    {
        $success = mail(
            'abobrinha@gmail.com',
            'Finalização do Leilão',
            'Lista de leilões finalizados: ' . $leilao->recuperarDescricao()
        );

        if(!$success) {
            throw new \DomainException('Erro ao enviar e-mail');
        }
    }
}
