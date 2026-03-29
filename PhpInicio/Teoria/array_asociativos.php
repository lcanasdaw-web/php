<?php

/*function dd(){
    foreach(func_get_args()as $arg){
        echo'<pre>';
        var_dump($arg);
        echo'</pre>';
    }
    die;
}*/
$users=[
        [
        'alias'=>'Lucho',
        'email'=>'lucho@gmail.com',
        'password'=>'Lucho99',
        'level'=>4,
        'point'=>4000
],
        [
        'alias'=>'Toni',
        'email'=>'toni@gmail.com',
        'password'=>'Toni99',
        'level'=>3,
        'point'=>3000
],
        [
        'alias'=>'Perla',
        'email'=>'perla@gmail.com',
        'password'=>'Perla99',
        'level'=>1,
        'point'=>100
],
        [
        'alias'=>'Calamardo',
        'email'=>'calamardo@gmail.com',
        'password'=>'Calamardo99',
        'level'=>5,
        'point'=>5000
],        
    
        [
    
        'alias'=>'Pesto',
        'email'=>'pesto@gmail.com',
        'password'=>'Pesto99',
        'level'=>2,
        'point'=>2000
        ]
];
//presentar en pantalla con doble foreach
foreach ($users as $user){
    foreach($user as $col=>$value){
        if($col!='password'){
        print $col.': '.$value.'<br>';
        
        }
    }
    print "<br>";
}
//array alias de busqueda

$aliases=['Lucho','mortadelo','filemon','Pesto','judas'];
//$alias=$aliases[rand(0,count($aliases)-1)];
$alias=$aliases[array_rand($aliases)];
   print"Alias: ".$alias.'<br>';
$find=false;
foreach ($users as $user){
        if($user['alias']==$alias){
            $find=true;
                foreach($user as $col=>$value){
                    if($col!='password'){
                    print $col.': '.$value.'<br>';
        
                 }
            }         
         }print"<br>";
    }
 
if($find==false){
    print "Usuario no encontrado";
}

// PUNTUACION ENTRE 1.000 Y 5.000
print "Usuaris con más de 1000 pts y menos de 5000pts<br>";

for ($i = 0; $i < count($users); $i++) {

    $score = $users[$i]['point'];
    if ($score == null) {
        $score = 0;
    }
    if ($users[$i]['point'] >= 1000 && $users[$i]['point'] <= 5000) {
        print $users[$i]['alias'] . " tiene " . $users[$i]['point'] . " puntos<br>";
    }
}

// FUNCION UNSET

print "<br><br>ARRAY DE ARRAYS ASOCIATIVOS ORIGINAL<br><br>";
var_dump($users);

/*unset($users[1]);
unset($users[2]);*/

//LE AÑADIMOS UN SORT

$point= array_column($users, 'point');
array_multisort($point, SORT_DESC, $users);

print"<br>";

print "<br><br>ARRAY CON DATOS ELIMINADOS<br><br>";
var_dump($users);


print "<br><br>PROBLEMAS QUE ENCONTRAMOS<br><br>";


//ARRAY_VALUES PARA NORMALIZAR LO ELIMINADO Y DARLE EL VALOR TEMPORAL A LO ANTERIOR HECHO
//SALTA ERROR PORQUE ESTA COMENTADO

/*$users= array_values($users);
var_dump($users);*/



print"<br><br>";
for($i=0;$i<count($users);$i++){
    foreach($users[$i] as $col => $value){
        print $col . ': '.$value.", ";
    }
    print"<br>";
}


