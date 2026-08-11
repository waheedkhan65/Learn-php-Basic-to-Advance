<?php

// HTML Entities  functions: which are used to convert special characters to HTML entities. 
// These functions are useful for preventing sql injections and XSS attacks by converting special characters to their corresponding HTML entities.
// To see the converted HTML entities, you can right click on the browser page where the output is displayed and select "View Page Source".

$str = "hello students, 'single quotes' and \"double qoutes\", <b>bold</b> <br>";


// htmlentities() function

// echo htmlentities($str); // Convert all applicable characters to HTML entities.
// echo "<br>";
// echo htmlentities($str, ENT_QUOTES); // Convert all applicable characters to HTML entities including single and double quotes.
// echo "<br>";
// echo htmlentities($str, ENT_NOQUOTES); // Convert all applicable characters to HTML entities excluding single and double quotes.


// ###########################################################

echo htmlspecialchars($str); // This function also work as it is like html entities function , and also convert special characters to HTML entities. But it only converts the most common special characters like &, ", ', <, and >. It does not convert all applicable characters like htmlentities() function.


?>