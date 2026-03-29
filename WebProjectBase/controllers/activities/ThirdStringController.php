<?php

include_once '../../model/StringFunctions.php';

$cadena = (string) filter_input(INPUT_POST, "cadena");
$c1 = (string) filter_input(INPUT_POST, "car1");
$c2 = (string) filter_input(INPUT_POST, "car2");

if ($c1 != NULL && $c2 != NULL && $cadena != NULL) {
    print"La distnacia entre $c1 y $c2 <br><br>";
    $dist = distcar($cadena, $c1, $c2);
    print $dist;
}

