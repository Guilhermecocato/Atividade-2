<?php

while (true) {
    $num = (int)readline("Digite um numero: ");
    if ($num > 0) {
        for ($i = 1; $i <= 10; $i++) {
            $result = $num * $i;
            echo "$num x $i = $result\n";
        }
    } else {
        echo "Este nao e um numero positivo.\n";
    }
}
