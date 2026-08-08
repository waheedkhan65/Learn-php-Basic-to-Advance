<?php

// Count and sizeof functions for arrays
// The count() function returns the number of elements in an array.
// The sizeof() function is an alias of count() and can be used interchangeably.

$vegetables = ["Carrot", "Potato", "Tomato", "Cucumber", "Spinach"];   // An array of vegetables names

echo "Number of elements in \$vegetables: " . count($vegetables) . "<br>";    // Using count() function
echo "Number of elements in \$vegetables: " . sizeof($vegetables) . "<br>";   // Using sizeof() function


echo "----------------------------------------------------------------<br>"; // separator line for clarity when viewing output


$grocery = [
    
    "Fruits" => ["Apple", "Banana", "Orange", "Grapes"],  
    "Vegetables" => ["Carrot", "Potato", "Tomato", "Cucumber"],
    "Dairy" => ["Milk", "Cheese", "Yogurt"],   
    "Bakery" => ["Bread", "Cake", "Pastry"] ,

];


// "Count" and "Sizeof" functions only count the top-level elements in multidimensional arrays
echo "Number of categories in \$grocery: " . count($grocery) . "<br>";    // Count the number of categories in the grocery array
echo "Number of categories in \$grocery: " . sizeof($grocery) . "<br>";   // Using sizeof() function to count the number of categories


echo "----------------------------------------------------------------<br>"; // separator line for clarity when viewing output

// To count the all arrays item we use mode, which is

echo "the total number with arrays and subarrays: " . count($grocery, 1) . "<br>";


echo "----------------------------------------------------------------<br>"; // separator line for clarity when viewing output


// To count the total number of items in all categories, we can use a loop to iterate through each category and sum the counts of their items.
foreach ($grocery as $category => $items) {
    echo "Number of items in $category: " . count($items) . "<br>";   // Count the number of items in each category
}

echo "----------------------------------------------------------------<br>"; 

 
// "In-array" and "Array_rsearch" functions for searching in arrays
// The in_array() function checks if a value exists in an array and returns true or false
// The array_search() function searches for a value in an array and returns the key if found, or false if not found

echo "<b> In-array and Array_rsearch functions for searching in arrays </b><br>";


echo "----------------------------------------------------------------<br>"; 


// Array flip function: flips the keys and values of an array. The keys become values and the values become keys.
// The array_flip() function is useful when you want to reverse the mapping of an array.

$array = [
    'name' => "waheed",
    'age' => 21,
    'city' => "islamabad",
];

$newArray = array_flip($array);   // Flipping the keys and values of the array

echo "flip the keys and values of the array <br>";
echo "<pre>";
print_r($newArray);
echo "</pre>";


echo "----------------------------------------------------------------<br>"; 


//Array_change_key_case function: changes the case of all keys in an array to either upper or lower case.
// The array_change_key_case() function is useful when you want to standardize the case of the keys in an array.


$newArray2 = array_change_key_case($array, CASE_LOWER);   // Changing the case of all keys in the array to lower case

echo "change the case of keys into lower <br>";
echo "<pre>";       // "<pre> tag" is used for better formatting of the output
print_r($newArray2);
echo "</pre>";


?>