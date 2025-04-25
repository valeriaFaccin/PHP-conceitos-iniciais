<?php

echo "Laço while" . PHP_EOL;
$num_ini = 150;
while($num_ini <= 300){
    echo $num_ini . PHP_EOL;
    $num_ini++;
}

echo "Laço for" . PHP_EOL;
for($num = 150; $num <= 300; $num++){
    echo $num . PHP_EOL;
}

echo "Laço do-while" . PHP_EOL;
$num = 150;
do {
    echo $num . PHP_EOL;
    $num++;
} while($num <= 300);
