<?php

// Números a comparar
$a = 36;
$b = 60;

print "Números: $a y $b<br>";

// Asegurar que ambos son positivos
if ($a < 0) {
    $a = -$a;
}
if ($b < 0) {
    $b = -$b;
}

// Calcular MCD (máximo común divisor)
$minimo = $a;
if ($b < $a) {
    $minimo = $b;
}

$mcd = 1;
for ($i = 1; $i <= $minimo; $i++) {
    if ($a % $i == 0 && $b % $i == 0) {
        $mcd = $i;
    }
}
print "El MCD de $a y $b es: $mcd<br>";

// Calcular MCM (mínimo común múltiplo)
$mcm = 0;
for ($i = 1; $i <= ($a * $b); $i++) {
    if ($i % $a == 0 && $i % $b == 0 && $mcm == 0) {
        $mcm = $i;
    }
}
print "El MCM de $a y $b es: $mcm<br>";

?>
