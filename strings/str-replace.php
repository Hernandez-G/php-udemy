<?php 

$string = "Ben|Sam|Amy|Jane";

$replacedString = str_replace("|", ", ", $string);

echo $string;

echo "<br>";

echo $replacedString;

// Practice

$string2 = "Rawr, Zaaa, Pizza";
$replacedString2 = str_replace("a", "*", $string2);


echo "<br>";

echo "<h4>Practice</h4>";
echo $string2;

echo "<br>";

echo $replacedString2;

$string3 = "Why, Dog, Far, Slow, Cat";

$replacedString3 = str_replace("Dog", "Ping", $string3);

echo "<br>";

echo $string3;
echo "<br>";

echo $replacedString3;