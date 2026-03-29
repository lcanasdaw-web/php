<?php

include_once '../../model/StringFunctions.php';

if (($cadena = filter_input(INPUT_POST, "texto")) != null) {
    print VocalCount($cadena);
} else {
    echo "<br><br>Has de pasar algun text a processar...";
}
print "  <p><a href=\"../../views/activities/StringsView.html\">Volver a la página anterior</a></p>\n";
