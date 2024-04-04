<?php

$number = rand(1, 100);
$guess = -1;
$attempts = 0;

echo "Escolha um numero de 1 a 100: ";
while ($guess != $number) {
    $guess = (int)readline("");
    $attempts++;
    if ($guess == $number) {
        echo "Acertou miseravi. \n";
    } elseif ($guess < $number) {
        echo "Tente um numero maior: ";
    } else {
        echo "Tente um numero menor: ";
    }
}