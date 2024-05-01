<?php 

$nome = "Alan Turing: O grande";

$pertence = str_contains($nome, "Turing");

if ($pertence) {
    echo "$nome é o Alan Turing: O grande" . PHP_EOL;
} else {
    echo "$nome não é o Alan Turing" . PHP_EOL;
}