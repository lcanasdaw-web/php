<?php

include_once '../../model/MathFunctions.php';

function VocalCount($cadena): int {
    $contVocales = 0;
    for ($pos = 0; $pos < strlen($cadena); $pos++) {
        if ($cadena[$pos] == 'a' || $cadena[$pos] == 'e' || $cadena[$pos] == 'i' ||
                $cadena[$pos] == 'o' || $cadena[$pos] == 'u') {
            $contVocales++;
        }
    }
    return $contVocales;
}

function distcar(string $cadena, string $c1, string $c2): int {
    $pos1 = strpos($cadena, $c1);
    $pos2 = strpos($cadena, $c2);

    if ($pos1 === false OR $pos2 === false) {
        return false;
    } else {
        $resultado = $pos1 - $pos2;
        if ($resultado < 0) {
            swap($pos1, $pos2);
        }
        $resultado = $pos1 - $pos2;
        return $resultado;
    }
}

function cleancad(string $cadena): string {
    $forbidden = [" ", "\t", "\n", "\r"];
    $resultado = "";
    for ($i = 0; $i < strlen($cadena); $i++) {
        $found = false;
        foreach ($forbidden as $caracter) {
            if ($cadena[$i] == $caracter) {
                $found = true;
            }
        }
        if (!$found) {
            $resultado .= $cadena[$i];
        }
    }
    return $resultado;
}

function mycrypt(string $cadena): string {
    $arraynum = [7, 11, 25, 34, 21, 8, 3, 14, 6];
    $resultado = '';
    $lenClave = count($arraynum);

    for ($i = 0; $i < strlen($cadena); $i++) {
        $char = $cadena[$i];
        $ascii = ord($char);
        $desplazamiento = $arraynum[$i % $lenClave];
        $resultado .= chr($ascii + $desplazamiento);
    }

    return $resultado;
}

function mydecrypt(string $cadena): string {
    $arraynum = [7, 11, 25, 34, 21, 8, 3, 14, 6];
    $resultado = '';
    $lenClave = count($arraynum);

    for ($i = 0; $i < strlen($cadena); $i++) {
        $char = $cadena[$i];
        $ascii = ord($char);
        $desplazamiento = $arraynum[$i % $lenClave];
        $resultado .= chr($ascii - $desplazamiento);
    }

    return $resultado;
}

function extractConsonants(string $cadena, bool $found): string {
    $forbidden = ["a", "e", "i", "o", "u", ',', '.', ';', ':', '-', '_', '?', "/", '#', '*', '=', '$', '@', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $resultado = "";
    for ($i = 0; $i < strlen($cadena); $i++) {
        $found = false;
        foreach ($forbidden as $caracter) {
            if ($cadena[$i] == $caracter) {
                $found = true;
            }
        }
        if (!$found) {
            $resultado .= $cadena[$i];
        }
    }
    return $resultado;
}

