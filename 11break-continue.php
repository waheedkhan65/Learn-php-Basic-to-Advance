<?php

echo "<h2>Break and Continue</h2>";

// break stops a loop completely.
// continue skips only the current step and moves to the next one.

echo "<h3>Easy Example</h3>";

// Break example: stop when the number reaches 4.
for ($number = 1; $number <= 5; $number++) {
    if ($number == 4) {
        break; // Stop the loop here.
    }

    echo "Number: $number<br>";
}

echo "<br>";

// Continue example: skip number 3.
for ($number = 1; $number <= 5; $number++) {
    if ($number == 3) {
        continue; // Skip this number.
    }

    echo "Number: $number<br>";
}

echo "<h3>Real-World Example</h3>";

// Real-world example: show items in a list.
// Continue skips the item we do not want to show.
// Break stops the list when we reach a certain item.
$items = ["Pen", "Pencil", "Eraser", "Notebook", "Ruler"];

foreach ($items as $item) {
    if ($item == "Eraser") {
        continue; // Skip this item.
    }

    if ($item == "Notebook") {
        break; // Stop listing items here.
    }

    echo "Item: $item<br>";
}

?>