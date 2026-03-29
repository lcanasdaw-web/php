<?php

$n1 = rand(1,30);
$n2 = rand(1,30);
$div=1;
$mult= 1;

if($n1>$n2){
    $menor = $n2;
    $mayor = $n1;
}else{
      $menor=$n1;
      $mayor=$n2;
    }

print "<br>Vamos a sacar el MCD y el MCM de $mayor y $menor<br>";
while ($div<=$mayor AND $div<=$menor){
        if ($mayor%$div==0 AND $menor%$div==0){
                $mcd= $div;   
        }
        $div++;
}
while ($mult % $mayor !=0 or $mult % $menor !=0){
    $mult++;
}
$mcm = $mult;
print "El MCD de $mayor y $menor es : $mcd<br><br>";
print "El MCM de $mayor y $menor es : $mcm<br><br>";

/* RESOLUCION CON WHILE OPTIMIZADA
 $mcd= $menor;
 $mcm= $mayor;
 while($mayor%$mcd !=0 or %menor%mcd !=0){
 $mcd;
 }
 * 
$mult = 2;
while($mcm % $menor !=0){
$mcm= $mayor * $mult;
$mult++;
 * }
 * 
print "El MCD de $mayor y $menor es : $mcd<br><br>";
print "El MCM de $mayor y $menor es :
 *  $mcm<br><br>";
 */

/*
 * for($mcd=$menor; $menor%$mcd !=0 OR $mayor%$mcd !=0 ; $mcd--);
 * for($mult= 2, $mcm = $mayor; $mcm%$menor !=0; mult++){
 * $mcm= $mayor * $mult;
 * }

 * 
 * FALSE AND TRUE
 * 
 * OR 
 * T T = T
 * T F = T
 * F T = T
 * F F = F
 * 
 * AND
 * T T = T
 * T F = F
 * F T = F
 * F F = F
 *  */