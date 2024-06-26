<?php

use Alura\DesignPattern\log\{SdtOutLogManager, FileLogManager};

require_once 'vendor/autoload.php';

//$logManager = new SdtOutLogManager();
$logManager = new FileLogManager(__DIR__ . '/log');
$logManager->log('info', 'Testando LogManager');
