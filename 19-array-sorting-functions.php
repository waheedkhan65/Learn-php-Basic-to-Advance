<?php

// Array Sorting Functions, UNCOMMENT THE CODE BLOCKS BELOW TO SEE THE OUTPUT OF EACH SORTING FUNCTION

$country = ['Pakistan', 'India', 'China','USA', 'Germany'];  // Array of country names

// sort($country); // Sorts the array in ascending order

// echo "the sorted array in ascending order: ";
// echo "<pre>";
// print_r($country);
// echo "</pre>";

// #######################################################

// rsort($country); // Sorts the array in descending order
// echo "the sorted array in descending order: ";
// echo "<pre>";
// print_r($country);
// echo "</pre>";

echo "----------------------------------------------------------------<br>";

$fruits = [
    'a' => 'Apple',
    'b' => 'Banana',
    'c' => 'Orange',
    'd' => 'Dragon fruit',
];

// asort($fruits); // Sorts the array in ascending order based on values
// echo "the sorted array of fruits: ";
// echo "<pre>";
// print_r($fruits);
// echo "</pre>";


// #######################################################

// arsort($fruits); // Sorts the array in descending order based on "VALUES"
// echo "the sorted array of fruits in descending order: ";
// echo "<pre>";
// print_r($fruits);
// echo "</pre>";

// #######################################################

// krsort($fruits); // Sorts the array in descending order based on "KEYS NOT VALUES"
// echo "the sorted array of fruits in descending order based on keys: ";  
// echo "<pre>";
// print_r($fruits);
// echo "</pre>";

echo "----------------------------------------------------------------<br>";

// $images = [ 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg'];  // Array of image file names

// natsort($images); // Sorts the array in natural order (e.g., img1, img2 and so on, because it also considers the numeric part of the string)
// echo "the sorted array of images in natural order: ";
// echo "<pre>";
// print_r($images);
// echo "</pre>";

// #######################################################

// $images2 = [ 'img9.jpg', 'Img7.jpg', 'img1.jpg', 'Img2.jpg'];  

// natcasesort($images2); // Sorts the array in natural order, ignoring case differences
// echo "The sorted array of images in natural order ignoring case differences, because the "nat-case-sort" function is case-insensitive ";
// echo "<pre>";
// print_r($images2);
// echo "</pre>";







?>