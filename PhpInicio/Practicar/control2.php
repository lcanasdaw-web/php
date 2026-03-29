<?php

$workers = [
    ["name" => "Jordi", "department" => "frontend", "role" => "director", "connected" => 1000, "inactive" => 600],
    ["name" => "Ana", "department" => "frontend", "connected" => 6000, "inactive" => 200],
    ["name" => "Jaume", "department" => "frontend", "role" => "analist", "connected" => 3000, "inactive" => 1000],
    ["name" => "Eli", "department" => "systems", "role" => "director", "connected" => 2500, "inactive" => 600],
    ["name" => "Victor", "department" => "systems", "connected" => 1500, "inactive" => 1000],
    ["name" => "Elena", "department" => "systems", "role" => "admin", "connected" => 4000, "inactive" => 500],
    ["name" => "Javier", "department" => "backend", "role" => "director", "connected" => 5000, "inactive" => 500],
    ["name" => "Sonia", "department" => "backend", "connected" => 1500, "inactive" => 1200],
    ["name" => "Jose", "department" => "backend", "connected" => 3500, "inactive" => 100],
    ["name" => "Rocio", "department" => "devops", "role" => "director", "connected" => 6000, "inactive" => 400],
    ["name" => "Alfonso", "department" => "devops", "role" => "analist", "connected" => 4500, "inactive" => 500],
    ["name" => "Monica", "department" => "devops", "connected" => 3500, "inactive" => 1000],
    ["name" => "Carlos", "department" => "frontend", "role" => "programmer", "connected" => 8000, "inactive" => 3000],
    ["name" => "Victoria", "department" => "backend", "role" => "programmer", "connected" => 8500, "inactive" => 1500]
];

$result1 = "";

print "<h3>Parte 1</h3>";

foreach ($workers as $field => $value) {
    if (array_key_exists('role', $value) && $value['department'] != "devops") {
        $result1 .= $value['name'] . "-" . $value['department'] . "(" . $value['role'] . ")" . ":" . $value['inactive'] . "; ";
    }
    if ($value['department'] == "devops") {
        if ($value['connected'] >= 6000) {
            $result1 .= $value['name'] . "-" . $value['department'] . "(" . $value['role'] . ")" . ":" . $value['inactive'] . "; ";
        }
    }
}print $result1;

print "<h3>Parte 2</h3>"; 

$result2 = "";
$arrayresult = [$result2];
$actiu = "";

foreach ($workers as $field => $value) {
    $value['actiu'] = $value['connected'] - $value['inactive'];
    if (array_key_exists('name', $value) && $value['inactive'] > 900) {
        $result2 .= $value['name'] . "(" . $value['department'] . ")" . ":" . $value['actiu'] . "<br>";
    }
}print $result2;
