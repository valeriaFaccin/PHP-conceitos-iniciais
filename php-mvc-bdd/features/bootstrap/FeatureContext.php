<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @When eu tentar criar uma formação com a descrição :arg1;
     */
    public function euTentarCriarUmaFormacaoComADescricao($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then eu vejo a seguinte mensagem de erro: :arg1.
     */
    public function euVejoASeguinteMensagemDeErro($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given que estou conectado ao banco de dados;
     */
    public function queEstouConectadoAoBancoDeDados()
    {
        throw new PendingException();
    }

    /**
     * @Given o banco está em memória;
     */
    public function oBancoEstaEmMemoria()
    {
        throw new PendingException();
    }

    /**
     * @When tento criar uma nova formação válida;
     */
    public function tentoCriarUmaNovaFormacaoValida()
    {
        throw new PendingException();
    }

    /**
     * @When com a descrição :arg1;
     */
    public function comADescricao($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then se eu buscar no banco devo encontrar essa formação.
     */
    public function seEuBuscarNoBancoDevoEncontrarEssaFormacao()
    {
        throw new PendingException();
    }

    /**
     * @Then eu devo ter uma formação criada com a descrição :arg1.
     */
    public function euDevoTerUmaFormacaoCriadaComADescricao($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given que estou contectado ao banco de dados;
     */
    public function queEstouContectadoAoBancoDeDados()
    {
        throw new PendingException();
    }

    /**
     * @Given o banco não está em memória
     */
    public function oBancoNaoEstaEmMemoria()
    {
        throw new PendingException();
    }

    /**
     * @When eu tento criar uma nova formação válida;
     */
    public function euTentoCriarUmaNovaFormacaoValida()
    {
        throw new PendingException();
    }

    /**
     * @Then se eu buscar no banco não devo encontrar essa formação
     */
    public function seEuBuscarNoBancoNaoDevoEncontrarEssaFormacao()
    {
        throw new PendingException();
    }
}
