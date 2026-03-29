<?php

// Array de resultados
$resultados = [];

// Número de repeticiones (sin const)
$max = 10;

// Array de operaciones
$operaciones = ["suma", "resta", "multiplicación", "división"];

// Bucle principal
for ($i = 0; $i < $max; $i++) {
    $numero = rand(0, 20);
    $otroNumero = rand(0, 20);
    $operacion = $operaciones[rand(0, 3)];

    print "Operación seleccionada: " . $operacion . "<br>";
    print "Números: $numero, $otroNumero<br>";

    // Cálculos posibles
    $ops = [
        $numero + $otroNumero,        // suma
        $numero - $otroNumero,        // resta
        $numero * $otroNumero,        // multiplicación
        $otroNumero == 0 ? null : $numero / $otroNumero  // división con control de 0
    ];

    // Obtener el resultado según la operación
    $indice = array_search($operacion, $operaciones);
    $resultado = $ops[$indice];

    // Comprobar si hubo división por cero
    if ($resultado === null) {
        print "Error, división por cero!<br>";
    } else {
        $resultados[] = $resultado;
        print "El resultado es: " . $resultado . "<br>";
    }
}

// Mostrar array de resultados con for
print "[";
for ($i = 0; $i < count($resultados); $i++) {
    if ($i < count($resultados) - 1) {
        print $resultados[$i] . ",";
    } else {
        print $resultados[$i];
    }
}
print "]<br>";

// Mostrar con implode
$cadena_res = implode(",", $resultados);
print "[" . $cadena_res . "]<br>";
?>
