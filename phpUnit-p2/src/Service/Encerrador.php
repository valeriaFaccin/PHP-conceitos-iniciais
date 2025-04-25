<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Dao\Leilao as LeilaoDao;

class Encerrador
{
    private LeilaoDao $dao;
    private EnviarEmail $email;

    public function __construct(LeilaoDao $dao, EnviarEmail $email)
    {
        //Dependency Injection -> constructor injection
        $this->dao = $dao;
        $this->email = $email;
    }

    public function encerra(): void
    {
        //$dao = new LeilaoDaoTest();
        $leiloes = $this->dao->recuperarNaoFinalizados();

        foreach ($leiloes as $leilao) {
            if ($leilao->temMaisDeUmaSemana()) {
                try {
                    $leilao->finaliza();
                    $this->dao->atualiza($leilao);
                    $this->email->notificarFinalizacaoLeilao($leilao);
                } catch (\Domainexception $e) {
                    error_log($e->getMessage());
                }
            }
        }
    }
}
