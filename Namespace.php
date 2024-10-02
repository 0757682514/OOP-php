<?php
// Namespaces in PHP help organize code by grouping classes, interfaces, functions, and constants into logical units. They help avoid name conflicts between classes or functions in large projects.

//Importance:

//Namespaces prevent naming collisions, especially when using external libraries.
//Makes code more readable and structured.

namespace App\Utils;

class Formatter {
    public function formatText($text) {
        return strtoupper($text);
    }
}

// Usage of namespace
use App\Utils\Formatter;

$formatter = new Formatter();
echo $formatter->formatText("hello world"); // HELLO WORLD
?>
