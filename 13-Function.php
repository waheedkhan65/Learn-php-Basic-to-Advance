<?php

/*
    PHP Functions - Beginner Friendly Examples

    In this file you will learn:
    1. A simple function
    2. Functions with different parameters
    3. Passing arguments by reference
    4. A recursive function
*/

// --------------------------------------------------
// 1) Simple function
// --------------------------------------------------

function sayHello()
{
    echo "Hello, welcome to PHP functions!<br>";
}

// Call the function
sayHello();

echo "--------------------------------------------------<br>";

// --------------------------------------------------
// 2) Function with parameters
// --------------------------------------------------

function sum($num1, $num2)
{
    return $num1 + $num2;
}

echo "Sum of 5 and 10 is: " . sum(5, 10) . "<br>";

// Function with different types of parameters:
// - required parameter: $name
// - optional parameter: $greeting
function greetPerson($name, $greeting = "Good morning")
{
    return $greeting . ", " . $name . "!";
}

echo greetPerson("Ali") . "<br>";
echo greetPerson("Sara", "Hello" ). "<br>";

// Function with more than two parameters
function studentInfo($name, $age, $city)
{
    return "Name: " . $name . ", Age: " . $age . ", City: " . $city;
}

echo studentInfo("John", 20, "New York") . "<br>";

echo "--------------------------------------------------<br>";

// --------------------------------------------------
// 3) Passing arguments by reference
// --------------------------------------------------

/*
    By default, PHP passes arguments by value.
    That means the original variable does not change.

    When you use '&' before a parameter, PHP passes it by reference.
    That means the function can change the original variable.
*/

function addFive(&$value)
{
    $value += 5;
}

$number = 10;
addFive($number);
echo "After passing by reference, number is: " . $number . "<br>";

// Another example of reference
function makeUpperCase(&$text)
{
    $text = strtoupper($text);
}

$word = "php";
makeUpperCase($word);
echo "After reference update: " . $word . "<br>";

echo "--------------------------------------------------<br>";

// --------------------------------------------------
// 4) Recursive function
// --------------------------------------------------

/*
    Recursion means a function calls itself.
    A recursive function must have a base case,
    otherwise it will run forever.
*/

// Simple example of recursion: like loop, but using function calls

function display($number){
    if($number <=10){
        echo $number . "<br>";
        $number++;
        display($number); // Function calls itself
    }
}

display(1);

echo "---------------------------------------------------<br>";

//  Factorial function using recursion

function factorial($n)
{
    // Base case: stop when $n is 0 or 1
    if ($n <= 1) {
        return 1;
    }

    // Recursive case: function calls itself
    return $n * factorial($n - 1);
}

echo "Factorial of 5 is: " . factorial(5) . "<br>";

// Another recursion example: countdown
function countdown($number)
{
    if ($number < 1) {
        echo "Done!<br>";
        return;
    }

    echo $number . "<br>";
    countdown($number - 1);
}

echo "Countdown example:<br>";
countdown(3);

?>