<?php

//PREG_MATCHALL

$email="usuari@exemple.com";
$pattern="/^[\w\.-]+@[\w\.-]+\.\w{2,}$/";
//array coincidencias
$matches=[];

if(($output=preg_match($pattern, $email, $matches))){
    print"Correu vàlid: $matches[0]<br>";
}else{
    print"Correu no vàlid";
}

//PREG_REPLACE
/* $text = "El meu número és 678-123-456.";
$pattern = "/\d{3}-\d{3}-\d{3}/";
$replacement = "[telèfon ocult]";

print preg_replace($pattern, $replacement, $text);*/