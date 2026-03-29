<?php

include_once '../../model/mathFunctions.php';
include_once '../../model/check.php';

$num = (int) filter_input(INPUT_POST, "value");
$num2 = (int) filter_input(INPUT_POST, "value2");

if ($num != NULL && $num2 != NULL && $num > 0 && $num2 > 0) {
    print"El MCD de $num i $num2<br><br>";
    $mcd = mcd($num, $num2);
    print "$mcd <br>";
} else {
  
    print checkErrorPair($num, $num2);
   
}