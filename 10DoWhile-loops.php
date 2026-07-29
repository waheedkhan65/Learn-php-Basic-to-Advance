<?php

// Do while loop: run the code first, then check the condition.
// Syntax:
// do {
//     code to repeat
// } while (condition);

// Simple example: count from 1 to 3.
$number = 1;

do {
    echo "Do while count: $number<br>";
    $number++; // Move to the next number.
} while ($number <= 3);

echo "-------------------<br>";

// Real-world example: show a menu at least once.
$showMenu = 1;

do {
    echo "Menu opened one time at least<br>";
    echo "Option 1: View profile<br>";
    echo "Option 2: Logout<br>";
    $showMenu++; // After the first display, we can stop the example.
} while ($showMenu <= 1);

?>