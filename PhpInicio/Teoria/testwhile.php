<?php

$x=0;
$y=0;

while ($x<10){
    while ($y<10){
        print "($x,$y)";
        $y++;    
    }
    print"<br>";
    $x++;
    $y=0;
}