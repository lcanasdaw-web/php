<?php

include_once '../../model/StringFunctions.php';

$string = (string) filter_input(INPUT_POST, "cadena");

$ccad = cleancad($string);


print $ccad;