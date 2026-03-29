<?php
/*
$numero = rand(1,100);
print "Numero: $numero<br>";
$divisor = 1;
do {
    if ($numero % $divisor === 0) {
        print "Divisor: $divisor<br>";
    }
    $divisor++;
} while ($divisor <= $numero);
 */
/* EJERCICIO 2
$numero = rand(1,100);
print "Numero: $numero<br>";
$fib1 = 0;
$fib2 = 1;

for($fib = 1; $fib < $numero; $fib++){
    $numero2= $fib1 + $fib2;
    $fib1 = $fib2;
    $fib2 = $numero2;
}
print"Numero fibbonacci es: $fib1";


$num1 = rand(0,30);
$num2 = rand(0,30);
$num3 = rand(0,30);

print "Los numeros son: $num1, $num2 y $num3";
if($num1 > $num2){
    if($num1 > $num3){
        $nummayor=$num1;
}else if($num3 > $num1){
        $nummenor=$num1;
print ("$nummenor,$nummayor");
    }
/*
Esto no sale en los apuntes, lo hemos hecho en clase
hemos utilizado el operador AND y OR (AND(UNION DE DOS FORMULAS) y OR (O ESTA FORMULA O LA OTRA))
$edad= rand (0,50);
$edadmin= 18;
$edadmax= 35;

if($edad>$edadmin AND $edad < $edadmax) {
    print "Tienes $edad y derecho a carnet jove";
}else {
    $edad<$edadmin OR $edad> $edadmax;
    print "Tienes $edad y no tienes derecho a carnet jove";
}
*/

/*
$edad= rand (0,50);
$edadmin= 18;
$edadmax= 35;

if($edad>$edadmin AND $edad<$edadmax) {
   print "Tienes $edad y tienes derecho a carnet jove";
}else {
    print "Tienes $edad y no tienes a carnet jove";
if($edad<$edadmin);{
    print "Cumples el requisito porque la edad minima es $edadmin<br>";
}
if($edad>$edadmax);{
    print "Cumples el requisito porque la edad maxima es $edadmax<br>";