<?php

// Example of a multidimensional array in PHP, with a focus on using the foreach loop 
// with list() to destructure the array elements for easier access to their values.

$student = [
    [
        'roll' => 101,
        'name' => 'Waheed',
        'marks' => 80 ,
        'age' => 21,
    ],
    
    [
        'roll' => 102,
        'name' => 'Ali',
        'marks' => 85,
        'age' => 22,
    ],

    [
        'roll' => 103,
        'name' => 'Mushin',
        'marks' => 88,
        'age' => 23,
    ],

    [
        'roll' => 104,
        'name' => 'Zara',
        'marks' => 90,
        'age' => 24,
    ],

];


// Loop through the multidimensional array of students and print their details in a readable format using list() to destructure the array elements.
foreach ($student as list('roll' => $roll, 'name' => $name, 'marks' => $marks, 'age' => $age)){
    echo "$roll, $name, $marks, $age <br>";
};

?>