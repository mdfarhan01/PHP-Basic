<?php

// Operators in php

echo "<h2>Operators in PHP</h2>";
// Arithmetic Operators
// Addition
$a = 18;   
$b = 5;
$sum = $a + $b;
echo "sum is : $sum <br/>"; 
echo "<br/>";

// Subtraction  
$sub = $a - $b;
echo "sub is : $sub <br/>"; 
echo "<br/>";

// Multiplication
$mul = $a * $b;     
echo "mul is : $mul <br/>";
echo "<br/>";

// Division
$div = $a / $b;
echo "div is : $div <br/>"; 
echo "<br/>";


// Modulus
$mod = $a % $b; 
echo "mod is : $mod <br/>";
echo "<br/>";







//Assignment Operators
echo "<h2>Assignment Operators</h2>";

$x = 10;
$x += 13;   // $x = $x +13 
echo "Sum is : $x <br/><br/>";

$x -= 5;    // $x = $x - 5
echo "Sub is : $x <br/><br/>";

$x *= 2;    // $x = $x * 2
echo "Mul is : $x <br/><br/>";

$x /= 4;    // $x = $x / 4
echo "Div is : $x <br/><br/>";





//Comparison Operators


echo "<h2>Comparison Operators</h2>";  

$x = 20;
$y = "20";

var_dump($x == $y);  
echo "<br><br>";
var_dump($x === $y);  // false (value and type)

echo "<br/><br/>";


// Logical Operators
echo "<h2>Logical Operators</h2>";

$number_1 = 10;
$number_2 = 20;

if($number_1 > 2 && $number_2 < 10) { // Logical AND
    echo "Valid";
} else {
    echo "Invalid <br/>"; 
}
echo "<br>"; 

if($number_1 > 2 || $number_2 < 10) { // Logical OR
    echo "Valid <br/>";
} else {
    echo "Invalid  <br/>"; 
}


?>