<?php 

// FOR LOOP FORMULA

/*

for(condition)
{
    do something
}
*/




// For Loop
for($i = 6; $i <= 60; $i += 6 )
{
    echo $i . '<br>';
}


echo '<br>';

// WHILE LOOP FORMULA

/*
$variable = whatever; 

while(condition)
{
    do something 
}

*/ 


// while loop


$j = 6;  //initalizes loop

while($j <= 60) //starts the wile loop
{
echo $j. '<br>'; //prints the value of j to the browser
$j += 6;  //increments $j by 6
/* 
the (+=) operator is to increment or decremnet a variable 
can also be used to add multiple varibales together
*/

}

