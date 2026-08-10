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

// 4) Chunk (str_split or chunk_split) — split into fixed-size pieces
echo "4) str_split — split '" . $sample . "' into characters (array):" . PHP_EOL;
print_r(str_split($sample));
echo "   str_split with chunk=5:" . PHP_EOL;
print_r(str_split($sample, 5));
echo "   chunk_split with separator '-': '" . chunk_split($sample, 5, '-') . "'" . PHP_EOL;
echo "---------------------------------------------<br>";

// 5) Lowercase / Uppercase
echo "5) strtolower: '" . strtolower($sample) . "'" . PHP_EOL;
echo "   strtoupper: '" . strtoupper($sample) . "'" . PHP_EOL;
echo "---------------------------------------------<br>";

// 6) Search / Find position: strpos (case-sensitive) and stripos (case-insensitive)
$needle = 'PHP';
$pos = strpos($sample, $needle);
echo "6) strpos — find '" . $needle . "' in '" . $sample . "' -> ";
echo ($pos !== false) ? "position $pos" . PHP_EOL : "not found" . PHP_EOL;
echo "   stripos('php') (case-insensitive) -> ";
echo var_export(stripos($sample, 'php'), true) . PHP_EOL;
echo "---------------------------------------------<br>";

// 7) Replace: str_replace and str_ireplace
echo "7) str_replace — replace 'World' with 'Universe': '" . str_replace('World', 'Universe', $sample) . "'" . PHP_EOL;
echo "   str_ireplace — case-insensitive replace 'php' with 'Python': '" . str_ireplace('php', 'Python', $sample) . "'" . PHP_EOL;
echo "---------------------------------------------<br>";

// 8) Compare: strcmp (case-sensitive) and strcasecmp (case-insensitive)
echo "8) strcmp('abc','ABC') => " . strcmp('abc', 'ABC') . "  (0 means equal)" . PHP_EOL;
echo "   strcasecmp('abc','ABC') => " . strcasecmp('abc', 'ABC') . "  (case-insensitive)" . PHP_EOL;
echo "---------------------------------------------<br>";

// 9) Shuffle: str_shuffle — randomize string characters
echo "9) str_shuffle — shuffle '" . $sample . "': '" . str_shuffle($sample) . "'" . PHP_EOL;
echo "---------------------------------------------<br>";

// 10) Trim functions: trim, ltrim, rtrim — remove whitespace
$raw = "  user@example.com  ";
echo "10) raw: '" . $raw . "'" . PHP_EOL;
echo "    trim: '" . trim($raw) . "'" . PHP_EOL;
echo "    ltrim: '" . ltrim($raw) . "'" . PHP_EOL;
echo "    rtrim: '" . rtrim($raw) . "'" . PHP_EOL;
echo "---------------------------------------------<br>";

echo "Notes: use mb_* functions for multibyte (UTF-8) strings when needed." . PHP_EOL;

echo "</pre>";


?>