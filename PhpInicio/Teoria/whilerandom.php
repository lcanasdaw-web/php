<?php
$contalumnos=1;
$MAXALUMNOS=26;
$conthighperf=0;
$level=5;
while($contalumnos <= $MAXALUMNOS){
    $nota = rand(0,10);
    print"<br>($contalumnos): $nota<br>";
    if ($nota >= $level){
        $conthighperf++;
    }
    $contalumnos++;
}
print "<br>BUCLE FINALIZADO CON $conthighperf BUENAS NOTAS<br>";