<?php



//Type of array

//1. Indexed array
echo "<h2>Indexed Array</h2>";
echo "<br/>";

$mark = array(29, 30, 31, 32, 33, 34, 35, 36, 37, 38);

echo $mark[3] . '<br/>';
echo $mark[5] . '<br/>';

echo "hello world <br/>" ;


//associative array
echo "<h2>Associative Array</h2>";
echo "<br/>";


$student_documents = [
    "Name" => "Ali Hosian",
    "Age" => 20,
    "Address" => "Lahore",
    "Phone" => "0300-1234567",
    "Email" => "alihosian01@gmail.com",    
    "Roll" => 20180,
    "Department" => "Computer Science",
    "University" => "Tisi",
];


foreach ($student_documents as $key => $value){
    echo "$key :  $value <br/>";
}



//multidimensional array
echo "<h2>Multidimensional Array</h2>";
echo " <h2> first example</h2><br/>";


$emp = [
    ['01', 'Alice', 'HR'],
    ['02', 'Bob', 'IT'],
    ['03', 'Charlie', 'Finance'],
    ['04', 'David', 'Marketing'],
    ['05', 'Eve', 'Sales'],
    ['06', 'Frank', 'Support'],
    ['07', 'Grace', 'Admin'],
    ['08', 'Heidi', 'HR'],
    ['09', 'Ivan', 'IT'],
    ['10', 'Judy', 'Finance'],
    ['11', 'Karl', 'Marketing'],
    ['12', 'Leo', 'Sales'],
    ['13', 'Mallory', 'Support'],
    ['14', 'Nina', 'Admin'],
    ['15', 'Oscar', 'HR'],
 ]; // ✅ <-- Missing semicolon fixed
 


foreach($emp as $employee){
    foreach($employee as $data){
        echo $data . " <br/>" ;
    }
    echo "<br/>";
}




echo "<br/>";

$student_info = [
    "Ali" => [
        "Roll" => 20180,
        "Department" => "Computer Science",
        "University" => "Tisi",
        "Address" => "Lahore",
        "Phone" => "0300-1234567",
        "Email" => "alihosian01@gmail.com",
    ],
    "Farhan Sadik" => [
        "Roll" => 20181,
        "Department" => "Computer Science",
        "University" => "Tisi",
        "Address" => "Lahore",
        "Phone" => "0300-1234567",
        "Email" => "farhansadik01@gmail.com",
    ],
    "Nur A Nayeem" => [
        "Roll" => 20182,
        "Department" => "Computer Science",
        "University" => "Tisi",
        "Address" => "Lahore",
        "Phone" => "0300-1234567",
        "Email" => "nuranayeem01@gmail.com",
    ],
    "Ali Raza" => [
        "Roll" => 20183,
        "Department" => "Computer Science",
        "University" => "Tisi",
        "Address" => "Lahore",
        "Phone" => "0300-1234567",
        "Email" => "alireza@gmail.com",
    
    ]
];

?>

<table style="width:60%">
  <tr>
    <th>Name</th>
    <th>Roll</th>
    <th>Department</th>
    <th>University</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Email</th>
  </tr>
  <?php foreach($student_info as $name => $details): ?>
  <tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $details['Roll']; ?></td>
    <td><?php echo $details['Department']; ?></td>
    <td><?php echo $details['University']; ?></td>
    <td><?php echo $details['Address']; ?></td>
    <td><?php echo $details['Phone']; ?></td>
    <td><?php echo $details['Email']; ?></td>
  </tr>
  <?php endforeach; ?>
</table>




<style>
table, th, td {
  border:1px solid black;
  border-collapse: collapse;
  text-align: center;
}
</style>


<?php


echo "<br/>";
echo "<h2>Multidimensional Array</h2>"; 

$mark = [
     [
     "physics" => 80,
     "chemistry" => 90,
     "math" => 85,
    ],
     [
     "physics" => 70,
     "chemistry" => 60,
     "math" => 75,
    ],
       [
       "physics" => 90,
       "chemistry" => 95,
       "math" => 100,
      ],
         [
         "physics" => 85,
         "chemistry" => 80,
         "math" => 90,
         ],
         [
            "physics" => 75,
            "chemistry" => 85,
            "math" => 80,
         ],
         [
            "physics" => 95,
            "chemistry" => 70,
            "math" => 90,
         ],
         [
            "physics" => 80,
            "chemistry" => 85,
            "math" => 75,
         ],
         [
            "physics" => 90,
            "chemistry" => 80,
            "math" => 85,
         ],
         [
            "physics" => 85,
            "chemistry" => 90,
            "math" => 80,
         ],
         [
            "physics" => 80,
            "chemistry" => 85,
            "math" => 75,
         ],
         [
            "physics" => 90,
            "chemistry" => 80,
            "math" => 85,
         ],
         [
            "physics" => 85,
            "chemistry" => 90,
            "math" => 80,
         ],
    
     ];




     ?>

<table style="width:50%">
  <tr>
    <th>physics</th>
    <th>chemistry</th>
    <th>math</th>
  </tr>
 <?php foreach ($mark as $subjects => $numbers) :?>
  <tr>
    <td><?php echo $numbers['physics']?></td>
    <td><?php echo $numbers['chemistry'] ?></td>
    <td><?php echo $numbers['math'] ?></td>
  </tr>
    <?php endforeach; ?>
</table>




<?php
     

//search in array 

echo "<h2>Search in Array</h2>";

$student_name = array("ali", "bob", "charlie", "david", "eve", "frank", "george", "harry", "ian", "jack");


echo in_array("bob", $student_name); // Output: true
echo "<br/>";


if (in_array("bob", $student_name)) {
    echo "Bob is in the array.";
} else {
    echo "Bob is not in the array.";
}

echo "<br/>";
echo "<h2> search</h2>";



$address = array( 
    "ali" => "lahore",
    "bob" => "karachi",
    "charlie" => "islamabad",
    "david" => "peshawar",
    "eve" => "quetta",
    "frank" => "multan",
    "george" => "faisalabad",
    "harry" => "rawalpindi",
    "ian" => "gujranwala",
    "jack" => "sialkot"
);
echo "<br/>";


foreach ($address as $key => $anythings) {
    echo "$key lives in $anythings <br/>";
}



?>