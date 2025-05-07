<?php


// Control Structures in PHP
// if, else, switch

// if-else statement
echo "<h2>If-Else Statement</h2>";

$i = 10;

if( $i < 20){
    echo "The number is less than 20" . '<br/>';
} elseif ($i == 20) {
    echo "The number is equal to 20" . '<br/>';
} else {
    echo "The number is greater than 20" . '<br/>';
}


// switch statement
echo "<h2>Switch Statement</h2>";

$mark = 55;

switch ($mark) {
    case $mark >= 110: 
        echo "Enter a vaid number" . '<br/>';
        break;
    case $mark >= 90:
        echo "Your Grade A+" . '<br/>';
        break;
    case $mark >= 80:
        echo "Your Grade A" . '<br/>';
        break;
    case $mark >= 70:
        echo "Your Grade A-" . '<br/>';
        break;
    case $mark >= 60:
        echo "Your Grade B" . '<br/>';
        break;
    case $mark >= 50:
        echo "Your Grade C" . '<br/>';
        break;
    case $mark >= 40:
        echo "Your Grade D" . '<br/>';
        break;
    default:
        echo "Your Grade F" . '<br/>';
}

// switch statement with day of the week
echo "<h2>Switch Statement with Days</h2>";

$day = 1;

switch ($day) {
    case 1:
        echo "Monday" . '<br/>';
        break;
    case 2:
        echo "Tuesday" . '<br/>';
        break;
    case 3:
        echo "Wednesday" . '<br/>';
        break;
    case 4:
        echo "Thursday" . '<br/>';
        break;
    case 5:
        echo "Friday" . '<br/>';
        break;
    case 6:
        echo "Saturday" . '<br/>';
        break;
    case 7:
        echo "Sunday" . '<br/>';
        break;
    default:
        echo "Invalid day" . '<br/>';
}
// break statement





?>