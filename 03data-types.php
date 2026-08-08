<?php
// Concept: Data Types
// PHP supports different data types such as strings, integers, floats, booleans, arrays, and null.

$stringValue = "PHP";
$intValue = 25;
$floatValue = 12.5;
$boolValue = true;
$arrayValue = ["apple", "banana", "orange"];
$nullValue = null;

// Simple example
echo "String: " . $stringValue . "<br>";
echo "Integer: " . $intValue . "<br>";
echo "Float: " . $floatValue . "<br>";
echo "Boolean: " . ($boolValue ? "true" : "false") . "<br>";

echo "------------------------------------<br>";

echo "Array values:<br>";
foreach ($arrayValue as $fruit) {
    echo "- " . $fruit . "<br>";
}
echo "------------------------------------<br>";

echo "Null value: " . var_export($nullValue, true) . "<br>";

// Real-world use example
// A user profile may contain a name (string), age (integer), balance (float), and login status (boolean).
$user = [
    "name" => "Sara",
    "age" => 28,
    "balance" => 100.75,
    "isLoggedIn" => true
];

echo "User: " . $user["name"] . "<br>";
echo "Balance: $" . $user["balance"] . "<br>";
?>
