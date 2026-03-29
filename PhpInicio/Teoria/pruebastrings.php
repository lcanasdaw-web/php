<?php
//cadena vacia
$cadena="";

print $cadena."\n";
print $cadena.PHP_EOL;

print"<br>Tabla ASCII".PHP_EOL;
print"============".PHP_EOL;;

for($i=0;$i<256;$i++){
    print $i."--->".chr($i).PHP_EOL;
}

