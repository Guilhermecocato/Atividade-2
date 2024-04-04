<?php

$n1 = 0;
$n2 = 1;
$n3 = 0;

echo "========== Os 10 primeiros numeros da sequencia de Fibonacci ========== \n";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 1) {
        echo $n1;
    } else if ($i == 2) {
        echo " " . $n2;
    } else {
        $n3 = $n1 + $n2;
        echo " " . $n3;
        $n1 = $n2;
        $n2 = $n3;
    }
}
