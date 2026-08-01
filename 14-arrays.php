<?php
// Concept: Arrays
// Arrays are used to store multiple values in one variable.

// Indexed array
$numbers = [10, 20, 30, 40];

// Associative array
$student = [
    "name" => "Hina",
    "age" => 19,
    "course" => "PHP"
];

// Simple example
echo "First number: " . $numbers[0] . "<br>";
echo "Student name: " . $student["name"] . "<br>";

// Real-world use example
// A shopping cart can be stored as an array of products and quantities.
$cart = [
    "book" => 2,
    "pen" => 5,
    "notebook" => 3
];

foreach ($cart as $item => $quantity) {
    echo "$item: $quantity<br>";
}
?>
