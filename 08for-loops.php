<?php

// For loop: use this when you know exactly how many times you want to repeat a task.
// Syntax:
// for (initialization; condition; increment) {
//     code to repeat
// }

// Simple example: count from 1 to 5.
for ($number = 1; $number <= 5; $number++) {
    echo "Count: $number<br>";
}

echo "-------------------<br>";

// Real-world example: print 5 receipt lines.
for ($item = 1; $item <= 5; $item++) {
    echo "Receipt item $item: Product details here<br>";
}

?>