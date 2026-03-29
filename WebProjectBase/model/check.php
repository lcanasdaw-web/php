<?php

function checkErrorPair($valor1, $valor2): string {
    $resp = "";
    if ($valor1 == NULL && $valor2 != NULL) {
        $resp .= "<br>No has introducido el primer valor<br>";
    }
    if ($valor1 != NULL && $valor2 == NULL) {
        $resp .= "<br>No has introducido el segundo valor<br>";
    }
    if ($valor1 == NULL && $valor2 == NULL) {
        $resp .= "<br>No has introducido ningun valor<br>";
    }
    if ($valor1 < 0 OR $valor2 < 0) {
        $resp .= "<br>No se admiten valores negativos<br>";
    }
    if ($valor1 < 0 && $valor2 == NULL) {
        $resp .= "<br>No has introducido un valor en el segundo campo y el primero es negativo<br>";
    }
    if ($valor1 == NULL && $valor2 < 0) {
        $resp .= "<br>No has introducido un valor en el primer campo y el segundo es negativo<br>";
    }

    return $resp;
}

function checkErrorOne($valor1): string {
    $resp = "";
    if ($valor1 == NULL) {
        $resp .= "<br>No has introducido ningun valor<br>";
    }
    if ($valor1 < 0) {
        $resp .= "<br>No se admiten valores negativos<br>";
    }

    return $resp;
}
