<?php 

// epoch -- 1/1/1970

$time = time();

echo $time;

echo '<br>';


$string = "Next Friday";
// takes the str > converts to time format > number of seconds since epoch
$date = strtotime($string);
echo $date;

echo "<br>";


//number of sec between the time of recording until the 12th of Jan 2030. 
$cal = $date - $time; 
echo "<br>";
echo $cal;


$minutes = $cal / 60;
echo "<br>";
echo $minutes;

$hours = $minutes / 60;
echo "<br>";
echo $hours;



// ceil = rounding up — $days = ceil($hours / 24); 
// floor = rounding down — $days = floor($hours / 24); 

$days = ceil($hours / 24); 

echo "<br>";

echo "It is $days days until $string.";
