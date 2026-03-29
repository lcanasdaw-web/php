<?php

include_once (__DIR__ . '/../model/validations/Check.php');

$email = "kk@gmail.kk";

if (Check::isValidMail($email) === true) {
    print "<br>EMAIL CORRECTO";
} else {
    print "<br>EMAIL INCORRECTO<br>";
}

$dni = "12345678-h";

if (Check::isValidDni($dni) === true) {
    print "<br>DNI CORRECTO";
} else {
    print "<br>DNI INCORRECTO<br>";
}