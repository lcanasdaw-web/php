<?php

//ESTRUCTURA --> function + nombrefuncion (contenido de la funcion separado por comas) + :tipo de dato {condiciones}
declare(strict_types=1);

function maxValue(int $value1, int $value2): int {
    if ($value1 > $value2) {
        return $value1;
    } else {

        return $value2;
    }
}

//INTERCAMBIAR VALORES PARA INVERTIR SU ORDEN.

function swap(&$value1, &$value2) {  // EL & ES PARA QUE SE PUEDA CAMBIAR EL VALOR Y NO PONGAS UN RETURN
    $aux = $value2;
    $value2 = $value1;
    $value1 = $aux;
}

//SACAR VALOR POSITIVO DE UNA RESTA CON UN BOOL

function resta(int $value1, int $value2, bool $positiva = false): int {
    if ($positiva == true) {
        if ($value1 < $value2) {
            return($value2 - $value1);
        }
    }
    return($value1 - $value2);
}

//SACAR EL NUMERO PRIMO

function isPrimer(int $num): bool { //NOMBRE DE LA FUNCION Y LISTA DE ARGUMENTOS
    $div = 3;
    if ($num < 4) {
        return true;
    }
    if ($num % 2 == 0) {
        return false;
    } else {
        $maxdiv = (int) sqrt($num);
    }                               //DEFINICIO DE VARIABLES LOCALS
    while ($div <= $maxdiv) {      //CONDICIONES PARA SALIR DEL BUCLE
        if ($num % $div == 0) {     //OPTIMIZAR EL FUNCIONAMENTO
            return false;           //RETURN PARA INDICAR QUE NO LO ES
        }
        $div = $div + 2;
    }
    return true;                    //RETURN PARA INDICAR QUE SI ES
}

//SACAR EL NUMERO PERFECTO

function esPerfecto(int $num): bool {
    $esperfecto = true;
    $sumadiv = 0;

    for ($i = 1;
            $i < $num;
            $i++) {
        if ($num % $i == 0) {
            $sumadiv = $sumadiv + $i;
        }
    }
    if ($sumadiv == $num) {
        $esperfecto = true;
    } else {
        $esperfecto = false;
    }
    if ($esperfecto == true) {
        return true;
    }
    return false;
}

//SACAR EL MCM

function mcm($value1, $value2) {
    $mcm = 1;
    for ($i = 1;
            $i <= ($value1 * $value2);
            $i++) {
        if ($i % $value1 == 0 && $i % $value2 == 0) {
            $mcm = $i;
            return $mcm;
        }
    }
}

//SACAR EL MCD

function mcd($value1, $value2) {
    $minimo = $value1;
    if ($value2 < $value1) {
        $minimo = $value2;
    }
    for ($i = 1;
            $i <= $minimo;
            $i++) {
        if ($value1 % $i == 0 && $value2 % $i == 0) {
            $mcd = $i;
        }
    }
    return $mcd;
}

//SACAR FIBONACCI

function fibo($value1) {
    $n1 = 0;
    $n2 = 1;
    $arrayfibo = [];
    $limite = 91;

    for ($i = 0;
            $i < $value1 && $i < $limite;
            $i++) {
        $arrayfibo[] = $n1;
        $nextfibo = $n1 + $n2;
        $n1 = $n2;
        $n2 = $nextfibo;
    }
    return $arrayfibo;
}
