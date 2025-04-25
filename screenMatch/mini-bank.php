<?php

//This is Valeria's mini-bank

$bankAccount = [
    'titular' => 'Ada Lovelace',
    'saldo' => 2000
];

echo "Bem-vindo(a) ao Mini-Bank:\n";

while (true) {
    printMenu($bankAccount);

    $op = (int)fgets(STDIN);
    if ($op == 1) {
        echo PHP_EOL;
        echo "Saldo atual: " . $bankAccount['saldo'] . PHP_EOL;
        echo PHP_EOL;
    } elseif ($op == 2) {
        echo PHP_EOL;
        $bankAccount['saldo'] = sacar($bankAccount);
    } elseif ($op == 3) {
        echo PHP_EOL;
        $bankAccount['saldo'] = depositar($bankAccount);
    } elseif ($op == 4) {
        echo PHP_EOL;
        echo "Bye Bye\n";
        break;
    } else {
        echo "Invalid Option.\n";
    }
}

function printMenu($bankAccount) {
    echo "*********\n";
    echo "Titular: " . $bankAccount['titular'] . PHP_EOL;
    echo "Saldo:" . $bankAccount['saldo'] . PHP_EOL;
    echo "*********\n";
    echo "1. Consultar saldo\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo " " . PHP_EOL;
}

function sacar($bankAccount) {
    echo " " . PHP_EOL;
    $value = (int) fgets(STDIN);
    if ($value < 0 || $value > $bankAccount['saldo']) {
        echo "Invalid value.\n";
        return $bankAccount['saldo'];
    }
    return $bankAccount['saldo'] -= $value;
}

function depositar($bankAccount) {
    echo " " . PHP_EOL;
    $value = (int) fgets(STDIN);
    if ($value < 0) {
        echo "Invalid value.\n";
        return $bankAccount['saldo'];
    }
    return $bankAccount['saldo'] += $value;
}
