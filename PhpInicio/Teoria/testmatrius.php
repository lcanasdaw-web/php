<?php

$matriu=array();
$matriu=['a','b','c','d','e'];
$V=[
    [1,2,3,4,5],
    ['a',2,3,4,5]
];
//print $V[1][4];
//array asociativo

$users=[
    [
        'name'=>'Pepe',
        'email'=>'pepe@fp.com'
    ],//$users[0]
    [
        'name'=>'Luis',
        'email'=>'luis@fp.com'

    ],//$users[1]
    [
        'name'=>'Maria',
        'email'=>'maria@fp.com'

    ]//$users[2]
];
for($i=0;$i<count($users);$i++){
print"Name: ".$users[$i]['name']."<br>";
print"&nbsp;&nbsp;Email: ".$users[$i]['email']."<br>";

}
print"<hr>";
foreach($users as $user){
    print"Name: ".$user['name']."<br>";
    print"&nbsp;&nbsp;Email: ".$user['email']."<br>";
}