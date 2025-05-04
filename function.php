<?php 


//function
//function definition
echo "<h2>function difinition</h2>";

function myName(){
    echo "My name is John Doe";
}

echo myName(); //calling function
echo "<br/>";


//function with parameters
//function with default parameters
echo "<h2>Function with parameters</h2>";

function add($a, $b) {
    return $a + $b;
}


echo add(5, 10); 

echo "<br/>";


//type of vaiables scope
echo "<h2>Variable Scope</h2>";
//local variable
echo "<h3>Local Variable</h3>";

function localScope(){
    $name = "John Doe";
    return $name;
}

echo localScope(); //calling function
echo "<br/>";


//global variable scope 
echo "<h3>Global Variable</h3>";

$number = 10; //global variable

function globalScope(){
    global $number; //using global variable
    $sumAdd = $number + 5; //local variable
    return $sumAdd; //returning local variable
}


echo globalScope(); //calling function
echo "<br/>";
echo "<br/>";

//try another way to use global variable 

function countdown(){
    static $mark = 0; // static variable to retain its value across calls
    $mark++; // increment the static variable
    echo $mark . "</br>"; // output the current value
}

countdown(); // call the function
countdown(); // call again to show it increments
countdown(); // call again to show it persists



function numberCondownOf(){
    static $hello_neumber = 0; // static variable to retain its value across calls
    $hello_neumber += 5; // increment the static variable by 5  
    echo $hello_neumber; // return the current value
}
 
numberCondownOf(); // call the function



//ananymous function
echo "<h2>Anonymous Function</h2>";

$name = function($number_1, $number_2) {
    return $number_1 + $number_2;
};


echo $name(5, 10); // calling the anonymous function
echo "<br/>";   



//common function
echo "<h2>Common Function</h2>";


//return the string length
echo "<h3>String Length</h3>";

$name_of_friend = "John Doe"; //global variable
echo strlen($name_of_friend); //string length function
echo "<br/>";


//convert string to lowercase
echo "<h3>String to Lowercase</h3>";
$My_name = "JOHN DOE"; //global variable
echo strtolower($My_name); //string to lowercase function
echo "<br/>";

//convert string to uppercase
echo "<h3>String to Uppercase</h3>";
$firend_name = "john doe"; //global variable
echo strtoupper($firend_name); //string to uppercase function
echo "<br/>";

//convert string to titlecase
echo "<h3>String to Titlecase</h3>";
$my_name = "john doe"; //global variable
echo ucwords($my_name); //string to titlecase function
echo "<br/>";

//substr function
echo "<h3>Substr Function</h3>";
$my_name = "john doe"; //global variable
echo substr($my_name, 0, 4); //string to titlecase function
echo "<br/>";

//str_replace function
echo "<h3>String Replace Function</h3>";    
$my_name = "john doe"; //global variable
$my_name = str_replace("john doe", "Farhan Sadik", $my_name); //string to titlecase function
echo $my_name; //string to titlecase function
echo "<br/>";

//trim function
echo "<h3>Trim Function</h3>";
$my_name = "   john doe   "; //global variable  
var_dump($my_name); //string to titlecase function
echo "<br/>";
echo $my_name;  //string to titlecase function
echo "<br/>";
echo trim($my_name); //string to titlecase function   
var_dump(trim($my_name)); //string to titlecase function
echo "<br/>";   



//number function
echo "<h2>Number Function</h2>";
// is number function
echo "<h3>Is Number Function</h3>";
$num = "10"; //global variable
echo is_numeric($num); //string to titlecase function
echo "<br/>";

//abs function
echo "<h3>Abs Function</h3>";
$Number = "-200";
echo abs($Number); //string to titlecase function
echo "<br/>";

//random function
echo "<h3>Random Function</h3>";
$random_number = rand(1, 6); //global variable
echo $random_number; //string to titlecase function
echo "<br/>";


// min and max function
echo "<h3>Min and Max Function</h3>";

$numbers = array(1, 2, 3, 4, 5); //global variable
$min = min($numbers); //string to titlecase function
$max = max($numbers); //string to titlecase function
echo "Min: " . $min . "<br/>"; //string to titlecase function
echo "Max: " . $max . "<br/>"; //string to titlecase function
echo "<br/>";


//define function
echo "<h2>Define Function</h2>";
//define a constant
define("PI", 3.14); //global variable

echo "The value of PI is: " . PI . "<br/>"; //string to titlecase function
echo "The value of PI is: " . constant("PI") . "<br/>"; //string to titlecase function
echo "<br/>";


//function with return type
echo "<h2>Function with Return Type</h2>";

function addNumbers(int $a, int $b): int { //function with return type
    return $a + $b;
}
echo addNumbers(5, 10); //calling function
echo "<br/>";



?>