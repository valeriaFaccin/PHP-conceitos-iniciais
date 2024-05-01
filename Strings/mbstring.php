<?php

$string = "Testes de integração com php";

echo strlen($string) . PHP_EOL;
echo strtoupper($string) . PHP_EOL;

echo mb_convert_case($string, MB_CASE_TITLE) . PHP_EOL;