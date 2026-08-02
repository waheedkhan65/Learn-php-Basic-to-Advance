<?php 

// Example of a multidimensional array in PHP
// A multidimensional array is an array that contains one or more arrays as its elements.,
// It is the dictonary in python, which is the collection of key-value pairs.
$employ = [
    [1, "waheed", "Senior Engineer", 15000],
    [2, "Ali", "Junior Engineer", 9000],
    [3, "Ahmed", "Manager", 20000],
    [4, "Ayesha", "Intern", 2000],
    [5, "Zara", "HR", 12000],
    [6, "Hassan", "Accountant", 11000],
    [7, "Sara", "Designer", 13000],
    [8, "Bilal", "Developer", 14000],
    [9, "Fatima", "Marketing Specialist", 10000],
    [10, "Omar", "Sales Executive", 9500]
];

// Loop through the multidimensional array and print each employee's details

for ($row = 0; $row < count($employ); $row++){              // Loop through each row of the array
    for ($col = 0; $col < count($employ[$row]); $col++){   // Loop through each column of the current row, emploies[$row] is the current row array
        echo $employ[$row][$col] . " ";                   // print the current element followed by a space
    }
    echo "<br>";                                          // print a line break after each row to separate employee details visually
}


echo "----------------------------------------------------------------<br>"; // separator for clarity when viewing output

$student = [
    "Waheed" =>[
        'roll' => 101,
        'marks' => 80 ,
        'age' => 21,
    ],
    
    "Ali" =>[
        'roll' => 102,
        'marks' => 85,
        'age' => 22,
    ],

    "Mushin" => [
        'roll' => 103,
        'marks' => 88,
        'age' => 23,
    ],

    "Zara" => [
        'roll' => 104,
        'marks' => 90,
        'age' => 24,
    ],

];

// Loop through the associative array of students and print their details in a table format.

echo "<table border='2' cellpadding='5px'> 
    <tr>
        <th> Name </th>
        <th> Roll </th>
        <th> Marks </th>
        <th> Age </th>
    </tr>";         // print the table header row with column names.

// Loop through each student in the associative array, where $key is the student's name and $v1 is the array of their details.
foreach ($student as $key => $v1){
    echo "<tr>
                <td> $key </td>";
                foreach ($v1 as $v2 ){
                echo "<td> $v2 </td>" ;
    }

    echo "</tr>";         // print the closing table row tag after printing all details for the current student.
}
echo "</table>";


echo "----------------------------------------------------------------<br>"; // separator for clarity when viewing output


// Loop through the associative array of students and print their details in a readable format.
foreach ($student as $key => $v1){        // Loop through each student in the associative array, where $key is the student's name and $v1 is the array of their details.
    echo "<br> Name: $key <br>";         // print the student's name
    foreach ($v1 as $k2 => $v2 ){       // Loop through each detail of the current student, where $k2 is the detail's key (e.g., 'roll', 'marks', 'age') and $v2 is the corresponding value. 
        echo "$k2 : $v2 <br>" ;        // print the detail's key and value in a readable format.
    }
    echo "<hr>";                     // print a horizontal rule to separate each student's details visually.
}



?>