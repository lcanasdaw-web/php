<?php

$esprimer=true;
$num=rand(1,100);
$div=$num-1;

while($div>1){
    if($num % $div ==0){
        $esprimer=false;
}
$div--;
    }
if($esprimer==true){
    print"El numero: $num es primer";
}else{
    print"El numero: $num NO es primer";
}