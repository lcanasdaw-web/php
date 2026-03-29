<?php

$MAXALUMNOS=26;
$level=5;

/*
 * En el bucle tenemos 3 apartados en su linea de definicion:
 * primero: establece los valores iniciales de las variales de control(solo pasa una vez, la primera, por este apartado)
 * segundo: establece de control para salir del bucle, la evalua en cada vuelta (cuaando la condicion sea falsa, se sale del bucle)
 * tercero: se incrementa l avariable de control que nos saca del bucle (solo esa!!!)
 * y se incrementa siempre antes de evaluar el segundo apartado.
 */

for ($contalumnos=1, $conthighperf=0; $contalumnos <= $MAXALUMNOS ; $contalumnos++){
    $nota = rand(0,10);
    print"<br>($contalumnos): $nota<br>";
    if ($nota >= $level){
        $conthighperf++;
    }
}
print "<br>BUCLE FINALIZADO CON $conthighperf BUENAS NOTAS<br>";
