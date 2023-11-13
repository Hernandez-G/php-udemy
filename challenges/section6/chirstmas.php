<?php 



$time = time();

echo '<br>';

$christmas = '25 December 2023';
$date = strtotime($christmas);
echo "1". $date;

$calcu = $date - $time; 
echo "<br>";
echo "2.". $calcu;


$minutes = $calcu / 60;
echo "<br>";
echo "3.". $minutes;

$hours = $minutes / 60;
echo "<br>";
echo "4.". $hours; 

$days = ceil($hours / 24); 
echo "<br>";
echo "5.". $days; 



echo "<br>";
echo "There are $days days until Christmas.";