<?php

$capitalsEuropa = [
    ["pais" => "España", "capital" => "Madrid", "poblacio" => 4000000],
    ["pais" => "Francia", "capital" => "Paris"],
    ["pais" => "Italia", "capital" => "Roma", "poblacio" => 5000000]
];
var_dump($capitalsEuropa);
print "<br><br>";
echo "<br>Estat: " . $capitalsEuropa[0]["pais"]. " Ciutat: " . $capitalsEuropa[0]["capital"].
     " Habitants: " . $capitalsEuropa[0]["poblacio"];
$capitalsEuropa[] = ["pais" => "Portugal", "capital" => "Lisboa", "idioma" => "portuges"];
print "<br><br>";
foreach ($capitalsEuropa as $row) {
    foreach ($row as $field => $value) {
        echo "<br>El camp: $field conte: $value";
    }
    print "<br><br>"; 
}
print "<br>RECORRIDO BUSCANDO AUSENCIAS EN LOS CAMPOS<br>"; 
for ($i=0; $i< count($capitalsEuropa); $i++) {
    $find = false;
    foreach ($capitalsEuropa[$i] as $field => $value) {
        echo "<br>El camp: $field conte: $value";
        if ($field === "poblacio") {
            $find = true;
        }
    }
    if ($find != true){
        print "<br>WARNING! : ".strtoupper($capitalsEuropa[$i]["pais"]). " NO PRESENTA DATOS DE POBLACION";
    }
    print "<br><br>"; 
}
print "<br>PRESENTAR LOS DATOS DE LAS CAPITALES CON MAS DE 4 MILLONES DE HABITANTES<br>"; 
for ($i=0; $i< count($capitalsEuropa); $i++) {
    foreach ($capitalsEuropa[$i] as $field => $value) {
        if ($field == "poblacio" and $value > 4000000){
            foreach ($capitalsEuropa[$i] as $field => $value){
                echo "<br>El camp: $field conte: $value";
            }
             print "<br><br>"; 
        }        
    }      
}
