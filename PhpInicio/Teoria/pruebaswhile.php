<?php

$nota = rand (0,10);
$cont = 10;
$MAX = 5;

print "<br>Contamos hasta $MAX<br>";
while ($nota < $MAX){
    print "<br>Nota $nota<br>";
    $cont = $nota + 1;
}
print "<br>BUCLE FINALIZADO<br>";