<?php 

$evens = 0;
$odds = 0;

for($i = 1; $i <= 25; $i++) {
    $randomNumber = rand(1, 25);

    if ($randomNumber % 2 == 0) {
        
        $evens++;
    } else {
    
        $odds++;
    }
}



echo "Evens: ". $evens;
echo "<br>";
echo "Odds: = ". $odds;



$even = 0; 
$odd = 0;

for($i = 1; $i <= 100; $i++) {
    $thisNum = rand(1, 100);

    if($thisNum % 3 == 0) 
    {
       $odd++;
    }

    else if($thisNum % 2 == 0)
    {
        $even++;
    }
}
echo "<br>";
echo "There were ". $even . " ". "even numbers and ". $odd. " odd numbers.";