<?php
function calculateBMI($weight, $height)
{
    $bmi = $weight / ($height * $height);
    return $bmi;
}

echo "========= CALCULE SEU IMC ========= \n";
echo "Informe seu peso: ";
$weight = (float)trim(fgets(STDIN));
echo "Agora informe sua altura: ";
$height = (float)trim(fgets(STDIN));
$height = $height / 100;
$bmi = calculateBMI($weight, $height);
printf("BMI: %.2f\n", $bmi);

if ($bmi < 18.5) {
    echo " === Voce esta abaixo do peso.\n";
} elseif ($bmi <= 24.9) {
    echo " === Seu peso esta normal.\n";
} elseif ($bmi <= 29.9) {
    echo " === Voce esta acima do peso. \n";
} else {
    echo " === Voce esta obeso. \n";
}