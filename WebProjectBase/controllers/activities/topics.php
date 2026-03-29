<?php

include '../../model/FileFunctionsBooks.php';
include '../../model/MathFunctions.php';
include '../../model/StringFunctions.php';

$pathname = "C:\\Fitxers\\llibres.csv";

$top = Topics($pathname);
var_dump($top);
die;
