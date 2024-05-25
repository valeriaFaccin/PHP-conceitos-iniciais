<?php
//exemplo de como criar exceções personalizadas
//extends pode estender de qualquer classe de erro ou exceção, inclusive da interface Throwable
class novaException extends DomainException {

}

try {
    echo "Nova exceção" . PHP_EOL;
} catch(novaException $e){
    echo $e->getMessage() . PHP_EOL;
}