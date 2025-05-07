<?php

// print hello world
echo "Hello World!!" . '<br/><br/>';




echo "Operators" . '<br/><br/>';
// Operators:

$a = 10;
$b = "20";    

$sum = $a + $b; // addition
$sub = $a - $b; // subtraction      
$mul = $a * $b; // multiplication
$div = $a / $b; // division 

echo "Sum: $sum" . '<br/>';
echo "Subtraction: $sub" . '<br/>';
echo "Multiplication: $mul" . '<br/>';
echo "Division: $div" . '<br/>';

echo  '<br/><br/>';





echo "Comparison" . '<br/>';
// Comparison Operators:
$x = 20;
$y = "20";

var_dump($x == $y);   // true (value)
var_dump($x === $y);  // false (value and type)

echo  '<br/><br/>';

echo "Logical" . '<br/>';

if ($a > 2 && $b < 10) { echo "Valid"; }
else { echo "Invalid '<br/>"; } // Logical AND
if ($a > 2 || $b < 10) { echo "Valid '<br/>"; }
else { echo "Invalid '<br/>"; } // Logical OR 






?>