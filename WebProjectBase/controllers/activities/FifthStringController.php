<?php 

include_once '../../model/StringFunctions.php';

$cadena = (string) filter_input(INPUT_POST, "cifrar");

if (!$cadena) {
    print "<p>No se ha enviado ninguna cadena.</p>";
}

$cifrado = mycrypt($cadena);

print $cifrado;