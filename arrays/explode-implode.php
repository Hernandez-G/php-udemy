<?php

$string = "Ken, Ben, Len, Amy";

// echo "<p>Exploded:</p>";
$explodedNames = explode(", ", $string);

print_r($explodedNames);

// echo "<p>Imploded:</p>";
$implodedNames = implode("|", $explodedNames);

echo $implodedNames;