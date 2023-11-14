<?php

// print_r ($_POST);


// $temp = $_POST['temperature'];
// $deg = $_POST['degrees'];
// $far = $temp * 9/5 + 32;
// $celsius = ($temp - 32) * 5 / 9;

// if($temp <= $far)
// {
//     echo $celsius. $deg;

// } else {
//     echo $far. $deg;
// }
// echo "<br>";
// echo "It is ". $temp. $deg;


if(isset($_POST['submit'])) {
    $temp = $_POST['temperature'];
    $deg = $_POST['degrees'];
    $accuracy = $_POST['accuracy'];

    if($deg == 'C'){
        $convertedTemperature = $temp * 9 / 5 + 32;
        $deg = 'F';
    } else {
        $convertedTemperature = ($temp - 32) * 5 / 9;
        $deg = 'C';
    }
    $convertedTemperature = round($convertedTemperature, $accuracy);
    
    echo "the converted temperatures is $convertedTemperature&deg $deg  to $accuracy decimal places.";
} else {
    echo "Please visit Temperature form.";
}
