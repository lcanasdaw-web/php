<?php

include_once '../../model/mathFunctions.php';
include_once '../../model/check.php';

$num= (int)filter_input(INPUT_POST, "value");

if($num != NULL && $num > 0){
    print"Divisors of $num <br><br>";
    $divisors=divisors($num);
    printArray($divisors, " - ");
} else{
    
    print checkErrorOne($num);
    
}