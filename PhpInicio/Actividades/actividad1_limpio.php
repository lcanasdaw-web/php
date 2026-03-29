<?php

$num1 = rand(0, 30);
$num2 = rand(0, 30);
$num3 = rand(0, 30);

print "Los numeros son: $num1, $num2 y $num3";
if ($num1 > $num2) {
    if ($num1 > $num3) {
        $nummayor = $num1;
        if ($num2 > $num3) {
            $nummed = $num2;
            $nummenor = $num3;
        } else {
            $nummed = $num3;
            $nummenor = $num2;
        }
    }
} else {
    if ($num2 > $num3) {
        $nummayor = $num2;
        if ($num1 > $num3) {
            $nummed = $num1;
            $nummenor = $num3;
        } else {
            $nummed = $num3;
            $nummenor = $num1;
        }
    } else {
        $nummayor = $num3;
        $nummed = $num2;
        $nummenor = $num1;
    }
}
print "Valor Mayor: $nummayor , valor menor $nummenor , valor mediano $nummed";
print "<br><br>Llista de valors:<br><br>";
for ($cont = ($nummenor + 1); $cont < $nummayor; $cont++) {
    if ($cont != $nummed) {
        print"<br>$cont<br>";
    }
}