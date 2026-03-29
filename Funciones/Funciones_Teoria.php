<?php

include './mymathlib.php';
include './libreria.php';

$num1 = rand(0, 20);
$num2 = rand(0, 20);

print "<h2>Maximo valor entre dos numeros:</h2>";

print "Els valors son $num1 y $num2<br>";

$max = maxValue($num1, $num2);

print "El valor maximo es : $max<br>";

print "<h2>Swap con numeros:</h2>";

swap($num1, $num2);

print "El valors ara son $num1 i $num2<br>";

//PARA EVITAR NEGATIVOS HACER ESTE IF
/* if ($num1 < $num2) {
  swap($num1, $num2);
  print "Els valors ARA son $num1 y $num2<br>";
  }

  $dist = $num1 - $num2;
  print "Distancia = $dist<br><br>"; */

//SI SE CALCULA EL VALOR SIEMPRE CREAR UNA VARIABLE PARA PRESENTARLO
$res = resta($num1, $num2, true);
print "El resultat de la resta es $res<br>";

$name1 = "Luis";
$name2 = "Lucho";

print "<h2>Swap con Strings:</h2>";

print"Els noms abans del swap son $name1 y $name2<br>";

swap($name1, $name2);
print "Els noms trobats son $name1 y $name2<br>";

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

print "<h2>Posicion Random en Array</h2>";

$vector1=[89,12,24,15,642,124];
$valor_aleatorio=array_value_rand($vector1);
print $valor_aleatorio;
