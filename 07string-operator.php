<?php
// PHP String Operators
// 1) .   (Concatenation operator)
// 2) .=  (Concatenation assignment operator)

echo "<h2>PHP String Operators</h2>";

// --------------------------------------------------
// 1) Concatenation operator (.)
// Joins two or more strings into one string.
// Real-world example: show a full name on a profile page.
// --------------------------------------------------

$firstName = "Waheed";
$lastName = "Khan";

$fullName = $firstName . " " . $lastName;
echo "Full Name: " . $fullName . "<br>";

// Another real-world example: build a product title.
$brand = "HP";
$product = "Laptop";
$productTitle = $brand . " " . $product;
echo "Product Title: " . $productTitle . "<br><br>";

// --------------------------------------------------
// 2) Concatenation assignment operator (.=)
// Adds new text to an existing string variable.
// Real-world example: build a message step by step.
// --------------------------------------------------

$message = "Hello";
$message .= ", Learner";     // Now: Hello, Waheed
$message .= "! Welcome";    // Now: Hello, Waheed! Welcome
$message .= " to PHP.";     // Final message

echo "Message: " . $message . "<br><br>";

// Practical example: create an address line.
$address = "Street 101";
$address .= ", Hayatabad";
$address .= ", Peshawar";

echo "Address: " . $address . "<br>";

?>