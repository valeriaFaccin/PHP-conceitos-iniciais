<?php

$string = "Testes de integração com php";

echo mbstring . phpstrlen($string) . PHP_EOL;
echo mbstring . phpstrtoupper($string) . PHP_EOL;

echo mbstring . phpmb_convert_case($string, MB_CASE_TITLE) . PHP_EOL;