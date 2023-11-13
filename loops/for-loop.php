<?php 

// for($i = 1; $i <= 10; $i++) {
//     echo $i . "<br>";
// }

/* 

$i = 2; initalizes the loop
$i <= 20; checks if $i is less than or equal to 20. if yes, the loop body is executed.
$ += 2; increments $i by 2. 


Note: it knows to give even numbers because it is starting at 2. 2+2 = 4 therefore it will echo

2, 4, 6... until it hits 20.
*/


// echo "<br>";

// for($i = 2; $i <= 20; $i += 2) {

//     echo $i . "<br>";
// }


//EXAMPLE

// echo '<br>';

// for($m = 10; $m <= 52; $m += 2 ) {
//     echo $m . "<br>";
// }

// echo '<br>';


//EXAMPLE 


// 3 + 8 > all the way up to 52

// for($m = 3; $m <= 52; $m += 8 ) {
//     echo $m . "<br>";
// }
// echo '<br>';




// First iteration 2 is still less than 50 && if k <= m ; prints 2
// Second iteration 2 is still less than 50; adds 2 && if k <= m ; prints 2, 4
// Third iteration 2 is still less than 50 && if k <= m; adds 2 more; prints 2, 4, 6
for($m = 2; $m <= 50; $m += 2 ) {
    echo $m . "<br>";
    echo '<br>';
    for($k = 2; $k <= $m; $k += 2){
        echo $k . ', ';


    }
}