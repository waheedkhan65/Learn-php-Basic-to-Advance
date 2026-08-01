<?php

// Example 1: Foreach with an associative array
// An associative array maps keys to values. In this example
// each student's property name (key) maps to its value.

$students = [
    'name' => 'Waheed Khan',
    'age' => 21,
    'education' => 'undergraduate',
];

// Loop with both key and value. $key holds the array key,
// $value holds the corresponding value for that key.

foreach ($students as $key => $value) {
    echo "$key = $value" . "<br>"; // print key = value on a new line
}

echo "<hr>"; // separator for clarity when viewing output

// Example 2: Foreach with an indexed array (value only)
// If you only need the values, omit the key => value pair.
$colors = ['red', 'green', 'blue'];
foreach ($colors as $color) {
    // $color receives each element in order: 'red', 'green', 'blue'
    echo "Color: $color" . "<br>";
}

echo "<hr>";

// Example 3: Nested arrays (multidimensional)
// Looping an outer associative array, then iterating each inner list.
$classes = [
    'classA' => ['Alice', 'Bob'],
    'classB' => ['Carol', 'Dave'],
];

foreach ($classes as $className => $studentsList) {
    echo "Class: $className" . "<br>";
    // Inner foreach iterates the list of student names
    foreach ($studentsList as $studentName) {
        echo "- $studentName" . "<br>";
    }
    echo "<br>"; // blank line between classes
}

echo "<hr>";

// Example 4: Modifying array values by reference
// When you use & before the loop variable it becomes a reference
// to the original array element, allowing in-place modification.
$salaries = [1000, 2000, 3000];
foreach ($salaries as &$salary) {
    $salary += 100; // give each salary a small raise
}
unset($salary); // best practice: destroy the reference after use

// Print the modified array using print_r for clarity
echo "Salaries after raise: ";
print_r($salaries);
echo "<br>";

?>