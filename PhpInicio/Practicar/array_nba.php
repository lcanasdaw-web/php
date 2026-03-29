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

/* POSIBLES PREGUNTAS
 * Presentar los datos de los jugadores con más de 2 campeonatos ("champion") y mas de 30.000 puntos
 * Presentar los datos de los jugadores con mas de 35000 sin campeonato
 * Presentar los datos de los jugadores en la posición center que han ganado mas de 3 campeonatos
 * Presentar un String con todos los nombres de los jugadores que han ganado mas de 4 campeonatos, separando cada nombre con una coma
 * Retornar un array de String con el jugador (o jugadores) que mas campeonatos han conseguido */


//PRESENTAR DATOS
/* for ($i = 0; $i < count($nbaTopScorers); $i++) {
  foreach ($nbaTopScorers[$i] as $key => $value) {
  print "$key : $value, ";
  }

  if(array_key_exists('champion', $nbaTopScorers[$i])!= true){
  print "&nbsp WARNING : " .$nbaTopScorers[$i]["player"] ." NO PRESENTA DATOS DE CAMPEONATOS";
  }
  print "<br>";
  }
  print "<br>";
  //* Presentar los datos de los jugadores con más de 2 campeonatos ("champion") y mas de 30.000 puntos
  for ($i = 0; $i < count($nbaTopScorers); $i++) {
  foreach ($nbaTopScorers[$i] as $key => $value) {
  if ($key == "champion" && $value >= 2){
  foreach ($nbaTopScorers[$i] as $key => $value) {
  if ($key == "points" && $value >= 30000) {
  foreach ($nbaTopScorers[$i] as $key => $value) {
  print "$key : $value ";
  }
  }
  }
  }
  }             print"<br>";


  } */

print "<h3>PRESENTAR EL ARRAY:</h3>";
for ($i = 0; $i < count($nbaTopScorers); $i++) {
    if (array_key_exists('champion', $nbaTopScorers[$i]) == true) {
        print "Jugador:  " . $nbaTopScorers[$i]["player"] . " " . $nbaTopScorers[$i]["champion"] . " (anillos) " . $nbaTopScorers[$i]["points"] . " (puntos) " . $nbaTopScorers[$i]["position"] . " (posicion) " . "<br>";
    } else {
        print"WARNING: el jugador " . $nbaTopScorers[$i]["player"] . " no tiene campeonatos<br>";
    }
}

//Presentar los datos de los jugadores con más de 2 campeonatos ("champion") y mas de 30.000 puntos

print "<h3>Mas de 2 anillos y mas de 30000 puntos:</h3>";
for ($i = 0; $i < count($nbaTopScorers); $i++) {
    if (array_key_exists('champion', $nbaTopScorers[$i]) == true) {
        if ($nbaTopScorers[$i]['champion'] >= 2 && $nbaTopScorers[$i]['points'] >= 30000) {
            print $nbaTopScorers[$i]["player"] . " tiene: " . $nbaTopScorers[$i]['champion'] . "anillos y tiene: " . $nbaTopScorers[$i]['points'] . " puntos<br>";
        }
    }
}
//Presentar los datos de los jugadores con mas de 35000 sin campeonato
print "<h3>Sin anillos y mas de 35000 puntos:</h3>";

for ($i = 0; $i < count($nbaTopScorers); $i++) {
    if (array_key_exists('champion', $nbaTopScorers[$i]) != true) {
        if ($nbaTopScorers[$i]["points"] >= 35000) {
            print $nbaTopScorers[$i]["player"] . " no tiene ningun anillo pero tiene " . $nbaTopScorers[$i]["points"] . " puntos";
        }
    }
}print "<br>";

//Presentar los datos de los jugadores en la posición center que han ganado mas de 3 campeonatos

print "<h3>Juega en Center y tiene mas de 3 campeonatos:</h3>";

for ($i = 0; $i < count($nbaTopScorers); $i++) {
    if (array_key_exists('champion', $nbaTopScorers[$i]) == true) {
        if ($nbaTopScorers[$i]['champion'] > 3 && $nbaTopScorers[$i]['position'] == 'Center') {
            print $nbaTopScorers[$i]["player"] . " tiene: " . $nbaTopScorers[$i]['champion'] . " anillos y juega en la posicion: " . $nbaTopScorers[$i]['position'] . "<br>";
        }
    }
}

//Presentar un String con todos los nombres de los jugadores que han ganado mas de 4 campeonatos, separando cada nombre con una coma

print "<h3>Tiene mas de 4 campeonatos:</h3>";

for ($i = 0; $i < count($nbaTopScorers); $i++) {
    if (array_key_exists('champion', $nbaTopScorers[$i]) == true) {
        if ($nbaTopScorers[$i]['champion'] > 4) {
            print $nbaTopScorers[$i]["player"] . "," . " tiene: " . $nbaTopScorers[$i]['champion'] . "anillos<br>";
        }
    }
}

print"<h4>Mismo resultado diferente formato</h4>";

$arrayResult = [];
/*for ($i = 0; $i < count($nbaTopScorers); $i++) {
    if (array_key_exists('champion', $nbaTopScorers[$i]) == true and $nbaTopScorers[$i]['champion'] > 4) {
        $result = "";*/
        foreach ($nbaTopScorers[$i] as $field => $value) {
            if ($result !== "") { //SI YA CONTIENE DATOS, SEPARADOR
                $result .= ";";
            }
            $result .= "$field : $value";
        }

        $arrayResult[] = $result;
    

if (count($arrayResult) == 0) {
    print "No results<br>";
} else {
    foreach ($arrayResult as $row) {
        print ("$row<br>");
    }
}

//Retornar un array de String con el jugador (o jugadores) que mas campeonatos han conseguido */
//CSV PERSONALIZADO

print"<br>Array de string formato CSV<br>";
$arrayRes = [];
foreach ($nbaTopScorers as $scorer) {
    $result = $scorer['player'] . "," . $scorer['position'] . ",";
    if (array_key_exists('champion', $scorer) != true) {
        $result .= "NO CHAMPION DATA";
    } else {
        $result .= $scorer['champion'];
    }
    $result.=",".$scorer['points'];
    $arrayRes[]=$result;
}
foreach ($arrayRes as $row){
    print ("<br>$row");
}