<?php

include_once (__DIR__ . '/../model/mathfunctions/Operations.php');
include_once (__DIR__ . '/../model/validations/Check.php');


$n=rand(0,10);
$result= Operations::factorial($n);
print"<br>El factorial de $n es: $result<br>";

if(Operations::isPrime($n)=== true){
    print "y $n es un valor primo";
}else{
    print"y $n no es un valor primo";
}