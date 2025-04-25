<?php

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
 
 // Loop through multidimensional array
 for ($row = 0; $row < count($emp); $row++) {
     for ($col = 0; $col < count($emp[$row]); $col++) {
         echo $emp[$row][$col] . " ";
     }
     echo "<br/>";
 
    }


foreach($emp as $employee){
    foreach($employee as $data){
        echo $data . " ";
    }
    echo "<br/>";
}




$mark = [
       "sm01" => [
        "physics" => 80,
        "chemistry" => 90,
        "math" => 85,
       ],
       "ali" => [
        "physics" => 70,
        "chemistry" => 60,
        "math" => 75,
       ],
         "sara" => [
          "physics" => 90,
          "chemistry" => 95,
          "math" => 100,
         ],
            "john" => [
            "physics" => 85,
            "chemistry" => 80,
            "math" => 90,
            ],
       
        ];



foreach ($mark as $key => $value) {
    foreach ($value as $value_2) {
        echo $value_2 . " ";
    }
    echo "<br/>";
}




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




foreach ( $mark as list("physics" => $phy, "chemistry" => $che, "math" => $math)) {
    echo "$phy $che $math <br/>";
}
echo "<br/>";

?>