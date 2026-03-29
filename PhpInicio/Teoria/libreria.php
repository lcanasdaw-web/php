<?php

function esPerfecto(int $num):bool{
$esperfecto=true;
$num=rand(1,100);
$sumadiv=0;

for($i=1;$i<$num;$i++){
if($num % $i == 0){
$sumadiv=$sumadiv + $i;
}

}
if($sumadiv == $num){
    $esperfecto=true;
}else{
    $esperfecto=false;
}
if($esperfecto==true){
    return true;
}
return false;
}


function esPrimo(int $num):bool{
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
    return true;
}  
return false;
}