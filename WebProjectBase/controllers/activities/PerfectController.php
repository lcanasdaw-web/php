<?php

include_once '../../model/MathFunctions.php';
include_once '../../model/check.php';

if (($num = (int) filter_input(INPUT_POST, 'value')) != null and $num > 0) {
    if (esPerfecto($num) == true) {
        print "<br>El valor $num es PERFECTO<br>";
    } else {
        print checkErrorOne($num);
    }
}
print "<p><a href=\"../../views/activities/NumbersView.html\">Volver</a></p>";

