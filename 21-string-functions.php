<?php
/*
 * 21-string-functions.php
 * Clean, student-friendly examples for a small set of common string functions.
 * After each concept the script prints a separator line as requested.
 */

echo "<h2>Simple PHP String Functions</h2>";
echo "<pre>";

// Sample strings used in examples
$sample = "Hello World PHP";
$csv    = "red,green,blue";

// 1) Length: strlen
echo "1) strlen — length of '" . $sample . "': " . strlen($sample) . PHP_EOL;
echo "---------------------------------------------<br>";

// 2) Count occurrences: substr_count
echo "2) substr_count — count 'o' in '" . $sample . "': " . substr_count($sample, 'o') . PHP_EOL;
echo "---------------------------------------------<br>";

// 3) Split (explode) — split by delimiter into an array
echo "3) explode — split '" . $csv . "' by ',' into array:" . PHP_EOL;
$parts = explode(',', $csv);
print_r($parts);
echo "---------------------------------------------<br>";



?>