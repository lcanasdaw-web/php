<?php

function saluda(string $nombre): string{
    $cadena= 'Hello '.$nombre.' !';
    return $cadena;
}

function array_value_rand(array $vector):int {
    $lenght=count($vector);
    $index=rand(0,$lenght -1);
    $value=$vector[$index];
    return $value;
    
}