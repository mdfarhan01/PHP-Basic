<?php


//loops in php
//for, while, do-while, foreach



//for loop
echo "<h2>For Loop</h2>";


echo "Multiplication Table of 10";
echo "<br/> <br/>";


for ( $i = 1; $i <= 10; $i += 1) {
    echo "10 x $i = " . (10 * $i) . '<br/>';
}
echo "<br/><br/>";



//while loop
echo "<h2>While Loop</h2>";
echo "Multiplication Table of 5 <br/> <br/>";
$x = 1;
while ($x <= 10) {
    echo "5 x $x = " . ( 5 * $x ) . '<br/>';
    $x+= 1;
}


// /do-while loop
echo "<h2>Do-While Loop</h2>";

$number = 1;

do {
    echo "The number is $number <br/>";
    $number++;
} while ($number <= 0);


//foreach loop
echo "<h2>Foreach Loop</h2>";


$name =[
    "alice" => "20",
    "bob" => "30",
    "charlie" => "40",
];

echo $name ["alice"] . '<br/>'; // Output: 20
echo $name ["bob"] . '<br/>'; // Output: 30
echo $name ["charlie"] . '<br/>'; // Output: 40


foreach ($name as $key => $value) {
    echo "$key: $value" . '<br/>'; // Output: alice: 20, bob: 30, charlie: 40
}


?>