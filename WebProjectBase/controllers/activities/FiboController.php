<?php

include_once '../../model/mathFunctions.php';
include_once '../../model/check.php';

$num= (int)filter_input(INPUT_POST, "value");

if($num != NULL && $num > 0){
    print"Serie Fibo $num <br><br>";
    $fibo= fibo($num);
    printArray($fibo, "<br>");
} else{
    print checkErrorOne($num);
}