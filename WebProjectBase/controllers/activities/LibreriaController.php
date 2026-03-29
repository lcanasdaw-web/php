<?php

include '../../model/FileFunctionsBooks.php';
include '../../model/MathFunctions.php';
include '../../model/StringFunctions.php';

$pathname = "C:\\Fitxers\\llibres.csv";

// Helper function to print results in a styled box
function printResultSection($title, $message, $data = null, $separator = "<br>") {
    echo "<article class='result-section'>";
    echo "<h3>$title</h3>";
    echo "<p>$message</p>";
    if ($data !== null) {
        if (is_array($data) && count($data) > 0) {
            echo "<div class='data-list'>";
            printArray($data, $separator);
            echo "</div>";
        } else {
            echo "<p class='error'>No se han encontrado resultados.</p>";
        }
    }
    echo "</article>";
}

// Visual wrapper for the results
echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <title>Resultados de Librería</title>
    <link href='../../css/style.css' rel='stylesheet' type='text/css'/>
    <style>
        body { padding: 2rem; }
        .results-container { max-width: 800px; margin: 0 auto; background: var(--bg-card); padding: 2rem; border-radius: 1rem; border: 1px solid var(--border); }
        .result-section { border-bottom: 1px solid var(--border); padding-bottom: 1.5rem; margin-bottom: 1.5rem; }
        .result-section:last-child { border-bottom: none; }
        .data-list { background: var(--bg-main); padding: 1rem; border-radius: 0.5rem; margin-top: 1rem; font-family: monospace; }
        .error { color: #f87171; font-weight: 600; }
        .back-link { display: inline-block; margin-top: 2rem; color: var(--primary); text-decoration: none; font-weight: 600; }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
<main class='results-container'>
    <h2>Resultados de la Búsqueda</h2>";

if (!file_exists($pathname)) {
    echo "<p class='error'>ERROR: FITXER INEXISTENT ($pathname)</p>";
} else {
    // Collect all inputs
    $año = filter_input(INPUT_POST, "año", FILTER_VALIDATE_INT);
    $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT);
    $author = filter_input(INPUT_POST, "author", FILTER_SANITIZE_SPECIAL_CHARS);
    $tema = filter_input(INPUT_POST, "tema", FILTER_SANITIZE_SPECIAL_CHARS);
    $infoaut = filter_input(INPUT_POST, "infoaut", FILTER_SANITIZE_SPECIAL_CHARS);
    $mayor = filter_input(INPUT_POST, "mayor", FILTER_VALIDATE_INT);
    $menor = filter_input(INPUT_POST, "menor", FILTER_VALIDATE_INT);
    $tema2 = filter_input(INPUT_POST, "tema2", FILTER_SANITIZE_SPECIAL_CHARS);
    $year2 = filter_input(INPUT_POST, "year", FILTER_VALIDATE_INT);
    $tema3 = filter_input(INPUT_POST, "tema3", FILTER_SANITIZE_SPECIAL_CHARS);
    $tema4 = filter_input(INPUT_POST, "tema4", FILTER_SANITIZE_SPECIAL_CHARS);
    $preu = filter_input(INPUT_POST, "preu", FILTER_VALIDATE_FLOAT);
    $year3 = filter_input(INPUT_POST, "year3", FILTER_VALIDATE_INT);

    // Filter by Year
    if ($año !== null && $año !== false) {
        $data = BooksByYear($pathname, $año);
        printResultSection("BooksByYear", "Identificadores de libros encontrados para el año $año:", $data);
    }

    // Filter by Price
    if ($price !== null && $price !== false) {
        $data = BooksByPrice($pathname, $price);
        printResultSection("BooksByPrice", "Identificadores de libros con precio $price:", $data);
    }

    // Filter by Author (Years)
    if ($author !== null && $author !== "") {
        $data = YearsByAuthor($pathname, $author);
        printResultSection("YearsByAuthor", "Años del autor $author:", $data, "; ");
    }

    // Filter by Theme/Topic
    if ($tema4 !== null && $tema4 !== "") {

        $data = Topics($pathname,$tema4);
        printResultSection("Topics", "Temas $tema4:", $data, "; ");
    }

    // Info by Author
    if ($infoaut !== null && $infoaut !== "") {
        $data = InfoByAuthor($pathname, $infoaut);
        printResultSection("InfoByAuthor", "Información detallada del autor $infoaut:", $data, "; ");
    }

    // Books between years
    if ($mayor !== null && $menor !== null && $mayor !== false && $menor !== false) {
        $data = BooksBetweenYears($pathname, $mayor, $menor);
        printResultSection("BooksBetweenYears", "Libros publicados entre $mayor y $menor:", $data, "\n");
    }

    // Books by Topic and Year
    if ($tema2 !== null && $year2 !== null && $year2 !== false) {
        $data = BooksByTopicAndYear($pathname, $tema2, $year2);
        printResultSection("BooksByTopicAndYear", "Libros con tema '$tema2' y año $year2:", $data, "\n");
    }

    // Books by Topic and Price
    if ($tema3 !== null && $preu !== null && $preu !== false) {
        $data = BooksByTopicAndPrice($pathname, $tema3, $preu);
        printResultSection("BooksByTopicAndPrice", "Libros con tema '$tema3' y precio $preu:", $data, "\n");
    }

    // Info by Year
    if ($year3 !== null && $year3 !== false) {
        $data = InfoBooksByYear($pathname, $year3);
        printResultSection("InfoBooksByYear", "Información por temas del año $year3:", $data, " - ");
    }
}

echo "    <a href='../../views/activities/BooksFileView.html' class='back-link'>&larr; Volver al buscador</a>
</main>
</body>
</html>";
