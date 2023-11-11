<?php

//setting up variables
$ones = 0;
$twos = 0;


//repeating numbers 100 times
for($i = 1; $i<= 100; $i++) {
    
    $randomNumber = rand(1, 2); //repeating any number between 1 and 2
    if($randomNumber == 1) {  
        $ones++; //this increase the $ones variable
    } else {
        $twos++;   //increaes the $twos variable
    }
}

echo "1 = ". $ones;
echo "<br>";
echo "2 = ". $twos;


