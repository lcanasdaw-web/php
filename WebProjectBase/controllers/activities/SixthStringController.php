<?php

include_once '../../model/StringFunctions.php';

$cadena = (string) filter_input(INPUT_POST, "descifrar");

if (!$cadena) {
    print "<p>No se ha enviado ninguna cadena.</p>";
}

$descifrado = mydecrypt($cadena);

print $descifrado;