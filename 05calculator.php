<?php
// Concept: Basic arithmetic in PHP
// This example shows how PHP can perform simple math operations.

// Simple example
$num1 = 10;
$num2 = 5;

$sum = $num1 + $num2;
$sub = $num1 - $num2;
$mul = $num1 * $num2;
$div = $num1 / $num2;

echo "Sum = " . $sum . "<br>";
echo "Difference = " . $sub . "<br>";
echo "Product = " . $mul . "<br>";
echo "Division = " . $div . "<br>";

// Real-world use example
// A billing system may use arithmetic to calculate totals and discounts.
$price = 200;
$discount = 20;
$finalPrice = $price - $discount;

echo "Final Price = " . $finalPrice . "<br>";
?>
