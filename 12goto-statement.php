<?php

// echo "<h2>Goto Statement</h2>";

// // goto jumps to a labeled part of the code.
// // It works, but beginners should use it carefully because normal flow is easier to read.

// echo "<h3>Easy Example</h3>";

// echo "Start of code<br>";

// goto myLabel;

// echo "This line is skipped<br>";

// myLabel:
// echo "We jumped here using goto<br>";

// echo "<h3>Real-World Example</h3>";

// // Real-world example: jump to an error message when the username is missing.
// $username = "";

// if ($username == "") {
//     goto showError;
// }

// echo "Username is valid<br>";
// goto end;

// showError:
// echo "Error: Username is required<br>";

// end:
// echo "Code finished<br>";



echo "waheed is here <br>";
goto bye;

for ($i = 0; $i < 10; $i++) {
    echo "This line will be skipped<br>";
}

bye:
echo "I am in goto-function, waheed is gone";

?>