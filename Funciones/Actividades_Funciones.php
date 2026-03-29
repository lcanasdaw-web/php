<?php

include './mymathlib.php';
include './libreria.php';

print "<h2>Numeros Primos:</h2>";

do {
    $prime = 1 + rand() % 100000000000000000000;
} while ($prime % 2 == 0 or $prime % 3 == 0);
$primer = isPrimer($prime);

if ($primer == true) {
    print "El valor $prime es PRIMER";
} else {
    print "El valor $prime NO ES PRIMER";
}

print "<h2>Numeros Perfectos:</h2>";

$array = [6, 28, 89, 397, 496, 8128, 4894];

for ($i = 0; $i < count($array); $i++) {
    $arrayperfecto = esPerfecto($array[$i]);
    if ($arrayperfecto == true) {
        print "El valor: " . $array[$i] . " es perfecto<br>";
    } else {
        print "El valor: " . $array[$i] . " no es perfecto<br>";
    }
}

print"<h2>Minim Comun Multiple</h2>";
$value1 = rand(6, 24);
$value2 = rand(6, 24);

$mincm = mcm($value1, $value2);

print "El valor $value1 y el valor $value2 es $mincm";

print"<h2>Maxim Comun Divisor</h2>";

$maxcd = mcd($value1, $value2);

print "El valor $value1 y el valor $value2 es $maxcd";

print"<h2>Sacar número Fibo</h2>";

$n1=rand(10,100);

print "Pedimos $n1 primeros valores de la serie fibonacci:<br>";

$fibo = fibo($n1);
$cadena = "";
foreach ($fibo as $fibof) {
    $cadena .= $fibof . "<br>";
}
print $cadena;
