<?php

function extractPrimes(array $a): array {
    $result = [];
    for ($i = 0; $i < count($a); $i++) {
        if (isPrime($a[$i]) == true) {
            $result = $a[$i];
        }
    }
    return $result;
}

//UNCLUDE LIBS
//FILTER_INPUT

if ($size > 0 and $max > 0 and $min > 0) {
    $arrayOrig = fillArray($size, $min, $max);
    $arrayPrimes = extractPrimes($arrayOrig);
    if (count($arrayPrimes) > 0) {
        printArray($arrayPrimes);
    } else {
        print "No prime Values";
    }
} else {
    print "No valid Values";
}

//SEGUNDO APARTADO


function extractConsonants(array $s, bool $rep): string {
    $consonants = "bcd.......xyz";
    $result = "";
    for ($i = 0; $i < strlen($s); $i++) {
        for ($j = 0; $j < strlen($consonants); $j++) {
            if ($consonants[$j] === $s[$i]) {
                $result .= $s[$i];
            }
        }
        //Opcion ForEach
        foreach ($s as $car) {
            foreach ($consonants as $con) {
                if ($con === $car) {
                    $result .= $car;
                }
            }
        }
    }
    return $result;
}

//FILTER_INPUT
//$rep =(bool) filter_input (INPUT_POST, "repetidos")
if ($frase != "") {
    $res = extractConsonants($a, $rep); //$rep sera true o false depende de lo que marques en la checkbox
    if (strlen($res) > 0) {
        print "La cadena resultant es $res";
    } else {
        print "No consonants found";
    }
} else {
    print"No text Avaliable";
}

