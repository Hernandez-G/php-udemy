<?php 

for($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

/* 

$i = 2; initalizes the loop
$i <= 20; checks if $i is less than or equal to 20. if yes, the loop body is executed.
$ += 2; increments $i by 2. 


Note: it knows to give even numbers because it is starting at 2. 2+2 = 4 therefore it will echo

2, 4, 6... until it hits 20.
*/


echo "<br>";

for($i = 2; $i <= 20; $i += 2) {

    echo $i . "<br>";
}

