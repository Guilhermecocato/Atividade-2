<?php

do {
    $num = (int)readline("Digite um numero: ");
    if ($num <= 0) {
        echo "Este numero nao e positivo.\n";
    }
} while ($num <= 0);
echo "Aqui estao os divisores de $num: ";
for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        echo "$i ";
    }
}
echo "\n";