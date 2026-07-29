<?php

// While loop: repeat code as long as the condition stays true.
// Syntax:
// while (condition) {
//     code to repeat
// }

// Simple example: count from 1 to 3.
$counter = 1;

while ($counter <= 3) {
    echo "While loop count: $counter<br>";
    $counter++; // Increase the counter so the loop can stop.
}

echo "-------------------<br>";

// Real-world example: a login system with 3 tries.
$attempts = 1;
$maxAttempts = 3;

while ($attempts <= $maxAttempts) {
    echo "Login attempt $attempts of $maxAttempts<br>";
    $attempts++;
}

?>
