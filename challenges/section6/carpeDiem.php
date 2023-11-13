<?php

date_default_timezone_set('America/Los_Angeles');

echo "Today is ". date('l');

echo "<br>";

echo date('l j F, Y' );

echo "<br>";

echo date('Y/m/j' );

echo "<br>";

echo date('l jS M Y, h:i a');


// Check if its a leap year
echo "<br>";

$year = date('L');

if($year) 
{
    echo "this is a leap year";
} else {
    echo "this is not a leap year";
}