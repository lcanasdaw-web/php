<?php

include_once '../../model/MathFunctions.php';

$num1 = (int) filter_input(INPUT_POST, 'num1');
$num2 = (int) filter_input(INPUT_POST, 'num2');
$long = (int) filter_input(INPUT_POST, 'long');
$check = (bool) filter_input(INPUT_POST, 'check');
$chord = (string) filter_input(INPUT_POST, 'orden');
$numBuscado = (int) filter_input(INPUT_POST, 'num');
$primeraPos = (int) filter_input(INPUT_POST, 'primeraPos');
$todasPos = (int) filter_input(INPUT_POST, 'todasPos');

if ($num1 !== false && $num2 !== false && $long !== false) {
    $array = fillArray($long, $num1, $num2);
    printArray($array, ', ');
    if ($chord == 'asc' OR $chord == 'desc') {
        arraySort($array, $chord);
        print "<h2>Array ordenado:</h2>";
        print "<pre>";
        print_r($array);
        print "</pre>";
        print "<p>Orden seleccionado: " . $chord . "</p>";
    } else if ($chord == 'not') {
        print"<br>No quieres ordenarlo.";
    }

    if ($check) {
        $maxim = 0;
        $minim = 0;
        $average = 0;
        arrayStats($array, $maxim, $minim, $average);
        print "<p>El análisis es el siguiente:<br>Máximo = $maxim <br>Mínimo = $minim <br>Media = $average</p>";
    }
    if ($primeraPos && $numBuscado !== false) {
        $posicion = linSearch($array, $numBuscado);
        if ($posicion !== -1) {
            print "<p>El valor $numBuscado se encuentra en la posición $posicion.</p>";
        } else {
            print "<p>El valor $numBuscado no se encuentra en el array.</p>";
        }
    }
    if ($todasPos && $numBuscado !== false) {
        $posiciones = allPositions($array, $numBuscado);
        if (!empty($posiciones)) {
            $lista = implode(", ", $posiciones);
            print "<p>El valor $numBuscado se encuentra en las posiciones: $lista.</p>";
        } else {
            print "<p>El valor $numBuscado no se encuentra en el array.</p>";
        }
    }
} else {
    print "<p>No se han introducido valores válidos para generar el array.</p>";
}
