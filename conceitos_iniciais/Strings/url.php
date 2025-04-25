<?php

$url = "https://alura.com.br";

if (str_starts_with($url, "https")){
    echo "É uma url segura" . PHP_EOL;
} else {
    echo "Não é uma url segura" . PHP_EOL;
}

if (str_ends_with($url, ".br")){
    echo "É do Brasil" . PHP_EOL;
} else {
    echo "Não é do Brasil" . PHP_EOL;
}