<?php

$dado1 = rand (1,6);
$dado2 = rand (1,6);


if(($dado1% 2 == 0) AND ($dado2 % 2== 0)){
    print "<br>Has ganado 100<br>";
}
else if(($dado1% 2 == 0) OR ($dado2 % 2== 0)){
    print "<br>Has ganado 10<br>";
}

if(($dado1% 2 == 0) AND ($dado2 % 2== 0) OR ($dado1==5 AND $dado2 == 5)){
    print"<br>Has ganado 1000<br>";
}
print "Ha salido: $dado1 y $dado2";
/*if($dado1  $dado2){
    print "<br>Has ganado 10<br>";
}
if($dado1  $dado2){
    print "<br>Has ganado 1000<br>";
}*/