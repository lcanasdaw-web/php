<?php

function isPrime(int $num): bool {      //nom de la funció i llista d’arguments
    $div = 3;
    if ($num < 4) {//definició de variables locals    
        return true;
    }
    if ($num % 2 == 0) {
        return false;
    } else {
        $maxDivisor = (int) sqrt($num);
    }
    while ($div <= $maxDivisor) {          //condicions per sortir del bucle
        //optimitzant el seu funcionament
        if ($num % $div == 0) {
            return false;               //retorn per a indicar que no lo es
        }
        $div = $div + 2;
    }
    return true;
}

function divisors(int $n): array {
    $divisors = [1];
    $maxdiv = sqrt($n);
    for ($div = 2; $div < $maxdiv; $div++) {
        if ($n % $div == 0) {
            $divisors[] = $div;
            $divisors[] = $n / $div;
        }
    }
    if ($n % $div == 0) {
        $divisors[] = $div;
    }
    sort($divisors);
    return $divisors;
}

function printArray2(array $a, string $sep) {
    for ($i = 0; $i < count($a); $i++) {
        if ($i < count($a) - 1) {
            print $a[$i] . $sep;
        } else {
            print $a[$i];
        }
    }
}

function basicOperations(int $n1, int $n2, string $op): float {
    $result = 0.0;
    switch ($op) {
        case "+": $result = $n1 + $n2;
            break;
        case "-": $result = $n1 - $n2;
            break;
        case "*": $result = $n1 * $n2;
            break;
        case "/": $result = $n1 / $n2;
            break;
    }
    return $result;
}

function fillArray(int $size, int $min, int $max): array {
    $array = [];
    for ($i = 0; $i < $size; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

function arrayStats(array $array, int &$maxim, int &$minim, float &$average) {
    $size = count($array);
    if ($size > 0) {
        $maxim = $array[0];
        $minim = $array[0];
        $total = $array[0];
        for ($i = 1; $i < $size; $i++) {
            if ($maxim < $array[$i]) {
                $maxim = $array[$i];
            }
            if ($minim > $array[$i]) {
                $minim = $array[$i];
            }
            $total += $array[$i];
        }
        $average = $total / $size;
    }
}

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
    for ($i = 1; $i <= $minimo; $i++) {
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

function printArray(array $a) {
    for ($i = 0; $i < count($a); $i++) {
        print"$a[$i]<br>";
    }
}
