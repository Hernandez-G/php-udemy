<?php

function calculate($number1, $number2) {
    $sum = $number1 + $number2; 
    $difference = $number1 - $number2;

    return [$sum, $difference];
}

$results = calculate(5, 13);

echo $results[0];

echo "<br>";

echo $results[1];
echo "<br>";

foreach($results as $result) {
    echo $result;
    echo "<br>";
}