<?php

$intentos = 0;
$aprobado = false;

do {
    $nota = rand(0, 10);
    if ($nota >= 5) {
        $aprobado = true;
    }
    $intentos++;
    print"<br>$nota en intento($intentos)<br>";
} while ($aprobado == false);

print "<br>has aprobado en $intentos intentos<br>";
