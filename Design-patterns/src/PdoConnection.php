<?php

namespace Alura\DesignPattern;

class PdoConnection extends \PDO
{
    private static ?self $instance = null;

    private function __construct(string $dsn, string $username = null, string $password = null, array $options = null)
    {
        parent::__construct($dsn, $username, $password, $options);
    }

    public static function getInstance(string $dsn, string $username = null, string $password = null, array $options = null)
    {
        if(is_null(self::$instance)){
            self::$instance = new static($dsn, $username = null, $password = null, $options = null);
        }

        return self::$instance;
    }
}