<?php

$limite=rand(1,20);
$min=rand(1,20);
$vector=[];
$i=0;

function esPrimo(int $num):bool{
    $primo=true;
    $num=rand(1,100);
    $div=$num-1;

while($div>1){
    if($num % $div ==0){
        $primo=false;
    }
    $div--;
    }
    if($primo==true){
        return true;
        
    }
        return false;

}
if(esPrimo($min)){
print "El numero $min es primo ";

}else{
    print "El numero $min no es primo ";
    
}


print "<br>Limite: $limite<br>";
for($i=0;$i<$limite;$i++){
    $aleatorio=rand(1,100);
    $vector[$min]=$aleatorio; 
print"$vector[$min] &nbsp";

}