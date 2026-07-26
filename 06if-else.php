<?php
// Concept 1: if
// Use if when you want to run code only if a condition is true.

$age = 20;

// Real-world example: check if a person can vote.
if ($age >= 18) {
    echo "You can vote.<br>";
}




// Concept 2: if-else
// Use if-else when you want one result for true and another for false.

$number = 7;

// Real-world example: check whether a number is even or odd.
if ($number % 2 == 0) {
    echo "The number is even.<br>";
} else {
    echo "The number is odd.<br>";
}



// Concept 3: if-elseif-else
// Use if-elseif-else when you have multiple conditions to check.

$marks = 75;

// Real-world example: decide a grade based on marks.
if ($marks >= 80) {
    echo "Grade: A<br>";
} elseif ($marks >= 60) {
    echo "Grade: B<br>";
} else {
    echo "Grade: C<br>";
}

?>
