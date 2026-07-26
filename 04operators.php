<?php
// Concept: Operators
// Operators are used to perform calculations and compare values.

$a = 10;
$b = 3;

// Simple example
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

// Comparison and logical operators
if ($a > $b && $a != $b) {
    echo "10 is greater than 3 and not equal to 3.<br>";
}

// Real-world use example
// A shop may use operators to calculate a discount and check if a customer qualifies.
$productPrice = 500;
$discount = 10;
$finalPrice = $productPrice - ($productPrice * $discount / 100);

echo "Original Price: $productPrice<br>";
echo "Discount: $discount%<br>";
echo "Final Price: $finalPrice<br>";
?>
