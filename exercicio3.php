<?php

$count = 0;
$sum = 0;

echo "========== Digite uma sequencia de numeros sendo o ultimo negativo. ========== \n";
do {
    $number = readline("Digite um numero: ");
    if ($number > 0) {
        $count++;
        $sum += $number;
    }
} while ($number >= 0);
if ($count > 0) {
    $average = $sum / $count;
    echo "A media dos valores e: " . $average;
}