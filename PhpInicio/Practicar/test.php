<?php

$nbaTopScorers = [
    ["player" => "LeBron James", "position" => "Forward", "champion" => 4, "points" => 38923],
    ["player" => "Kareem Abdul-Jabbar", "position" => "Center", "champion" => 6, "points" => 38387],
    ["player" => "Karl Malone", "position" => "Forward", "points" => 36928],
    ["player" => "Kobe Bryant", "position" => "Guard", "champion" => 5, "points" => 33643],
    ["player" => "Michael Jordan", "position" => "Guard", "champion" => 6, "points" => 32292],
    ["player" => "Dirk Nowitzki", "position" => "Forward", "champion" => 1, "points" => 31560],
    ["player" => "Wilt Chamberlain", "position" => "Center", "champion" => 2, "points" => 31419],
    ["player" => "Shaquille O'Neal", "position" => "Center", "champion" => 4, "points" => 28596],
    ["player" => "Carmelo Anthony", "position" => "Forward", "points" => 28289]
];

$ordenar= array_column($nbaTopScorers, 'points');
array_multisort($ordenar, SORT_DESC, $nbaTopScorers);
print_r($nbaTopScorers);
die;
/*$result="";

        foreach ($nbaTopScorers as $field => $value) {
            if (!array_key_exists('champion', $value)) {
                $result .= $value['player']. ";&nbsp";
    }
        }
      
        if ($result == "") {
    print "No results<br>";
} else {
       print $result;
   
}*/

 /* Retornar un array de String con el jugador (o jugadores) que mas campeonatos han conseguido */

$arrayResult=[];
$result="";
$maxchamp=0;
        foreach ($nbaTopScorers as $field => $value) {
            if(array_key_exists('champion', $value) && $value['champion']>$maxchamp){
                $maxchamp=$value['champion'];
            }
            if (array_key_exists('champion', $value)) {
                $result .= $value['player']. ";&nbsp";
    }

        }
     foreach ($nbaTopScorers as $field => $value){
            if(array_key_exists('champion', $value) && $value['champion'] == $maxchamp){
                $arrayResult[]=$value['player']."&nbsp".$value['champion']."<br>";
             }
        }
        
        print_r($arrayResult);

        