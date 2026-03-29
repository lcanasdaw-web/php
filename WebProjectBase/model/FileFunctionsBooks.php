<?php

$pathname = "c:\\Fitxers\llibres.csv";

//POR AÑOS
function BooksByYear(string $pathname, int $any): array {
    $result = [];
    if (($file = fopen($pathname, "r")) !== false) {
        while (($line = fgets($file)) !== false) {

            $fields = explode(",", $line);

            if ($fields[4] == $any) {
                $result[] = $fields[0] . " - " . $fields[1];
            }
        } fclose($file);
    }
    return $result;
}

function BooksByPrice(string $pathname, float $price): array {
    $result = [];
    if (($file = fopen($pathname, "r")) !== false) {
        while (($line = fgets($file)) !== false) {

            $fields = explode(",", $line);

            if ($fields[5] == $price) {
                $result[] = "<br>" . $fields[0] . " - " . $fields[1] . "<br>";
            }
        } fclose($file);
    }
    return $result;
}

function YearsByAuthor(string $pathname, string $autor): array {
    $result = [];
    if (($file = fopen($pathname, "r")) !== false) {
        while (($line = fgets($file)) !== false) {
            $fields = explode(",", $line);
            if ($fields[2] == $autor) {
                $result[] = $fields[1] . ": " . $fields[4] . " - " . $fields[2];
            }
        }
        fclose($file);
    }
    return $result;
}

function Topics(string $pathname, string $tema): string {
    $topics = [];

    if (($file = fopen($pathname, "r")) !== false) {

        while (($line = fgets($file)) !== false) {
            $line = trim($line);

            if ($line != "") {
                $parts = explode(";", $line);

                // Comprovem que l'índex 3 existeix abans d'accedir-hi
                if (count($parts) > 3 && $parts[3] == $tema) {
                    $topics[] = $parts[3];
                }
            }
        }

        fclose($file);
    }

    // Eliminem duplicats
    $topics = array_unique($topics);

    // Construïm el string separat per ";"
    $result = "";
    $i = 0;
    $total = count($topics);

    foreach ($topics as $topic) {
        $result .= $topic;
        if ($i < $total - 1) {
            $result .= ";";
        }
        $i++;
    }

    return $result;
}

function InfoByAuthor(string $pathname, string $autor): array {
    $result = [];
    if (($file = fopen($pathname, "r")) !== false) {
        while (($line = fgets($file)) !== false) {
            $fields = explode(",", $line);
            if ($fields[2] == $autor) {
                $result[] = $fields[1] . "(" . $fields[3] . ")" . "-" . $fields[4] . " : " . $fields[5] . " €";
            }
        }
        fclose($file);
    }
    return $result;
}

function BooksBetweenYears(string $pathname, int $mayor, int $menor): array {
    $result = [];
    if (($file = fopen($pathname, "r")) !== false) {
        while (($line = fgets($file)) !== false) {
            $fields = explode(",", $line);
            if ($fields[4] <= $mayor && $fields[4] >= $menor) {
                $result[] = $fields[0] . "<br>";
            }
        }
        fclose($file);
    }
    return $result;
}

function BooksByTopicAndYear(string $pathname, string $tema, int $year): array {
    $result = [];
    if (($file = fopen($pathname, "r")) !== false) {
        while (($line = fgets($file)) !== false) {
            $fields = explode(",", $line);
            if ($fields[3] == $tema && $fields[4] == $year) {
                $result[] = $fields[1] . " : " . $fields[2] . "<br>";
            }
        }
        fclose($file);
    }
    return $result;
}

function BooksByTopicAndPrice(string $pathname, string $tema, float $price): array {
    $result = [];
    if (($file = fopen($pathname, "r")) !== false) {
        while (($line = fgets($file)) !== false) {
            $fields = explode(",", $line);
            if ($fields[3] == $tema && $fields[5] <= $price) {
                $result[] = $fields[1] . " : " . $fields[1] . "<br>";
            }
        }
        fclose($file);
    }
    return $result;
}

function InfoBooksByYear(string $pathname, int $year): array {
    $result = [];
    if (($file = fopen($pathname, "r")) !== false) {
        while (($line = fgets($file)) !== false) {
            $fields = explode(",", $line);
            if ($fields[4] == $year) {
                $result[] = $fields[3] . " : " . $fields[1] . "<br>";
            }
        }
        fclose($file);
    }
    return $result;
}

function WriteStringData(string $pathname, string $data): bool {
    $handle = fopen($pathname, "w");
    if ($handle === false) {
        return false;
    }

    $written = fwrite($handle, $data);
    fclose($handle);

    return ($written !== false);
}

function AppendStringData(string $pathname, string $data): bool {
    $handle = fopen($pathname, "a");
    if ($handle === false) {
        return false;
    }

    $written = fwrite($handle, $data);
    fclose($handle);

    return ($written !== false);
}

function WriteArrayData(string $pathname, array $array): int {
    $handle = fopen($pathname, "w");
    if ($handle === false) {
        return -1;
    }

    $count = 0;

    foreach ($array as $value) {
        $written = fwrite($handle, (string)$value);
        if ($written === false) {
            break;
        }
        $count++;
    }

    fclose($handle);
    return $count;
}

function AppendArrayData(string $pathname, array $array): int {
    $handle = fopen($pathname, "a");
    if ($handle === false) {
        return -1;
    }

    $count = 0;

    foreach ($array as $value) {
        $written = fwrite($handle, (string)$value);
        if ($written === false) {
            break;
        }
        $count++;
    }

    fclose($handle);
    return $count;
}

