<?php 

$string = "Hello World, This is a test string.";  // A string variable

// Explode function return string into array thats why we store the results in Array

$newArray = explode(" ", $string);  // Exploding the string into an array using an empty string as the delimiter
$newArray2 = explode(" ", $string, 3);  // Exploding the string into an array using a limiting the number of elements to 3


echo "<pre>";
print_r($newArray);  // Printing the resulting array
echo "print the given resulting array with limited elements <br>";
print_r($newArray2);  // Printing the resulting array with limited elements
echo "</pre>";


echo "----------------------------------------------------------------<br>"; // separator line 

// Implode function: The implode() function is used to convert the array elements into a single string. It takes an array and returns a string with the array elements joined together, separated by the specified delimiter.

$fruits = ['Apple', 'Banana', 'Orange', 'Dragon fruit'];  // An array of fruits

echo implode(", ", $fruits);  // Converting the array into a single string with a comma and space as the delimiter


?>