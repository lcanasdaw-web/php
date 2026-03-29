<?php

include '../../model/MathFunctions.php';
include '../../model/StringFunctions.php';

$num1 = (int) filter_input(INPUT_POST, 'num1');
$num2 = (int) filter_input(INPUT_POST, 'num2');
$long = (int) filter_input(INPUT_POST, 'long');
$check = (bool) filter_input(INPUT_POST, 'delete');

if ($num1 !== null && $num2 !== null && $long !== null) {
    $array = fillArray($long, $num1, $num2);
    if ($array == null) {
        print "<b>Cal establir els valors minim, maxim i la mida<b>";
    } else {
        print"<h3>ARRAY ORIGINAL</h3>";
        printArray($array, ', ');
        print"<h3>ARRAY DE PRIMERS</h3>";
        $extractPrime = extractPrime($array);
        printArray($extractPrime, ', ');
        
    }
}
print"<br>";
if (($cadena = filter_input(INPUT_POST, "frase")) != null) {
    $conso = extractConsonants($cadena, true);
    if ($conso == "") {
        print "<br><b>No es troba cap consonant<b>";
    } else {
        print "<br><b>Resultat: $conso<b>";
    }
} else {
    print"<br><b>Cap frase introduida<b>";
}

    