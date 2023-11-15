<?php

// check if button was clicked

if(isset($_POST['submit'])) {
    // get the values from form
    $number = $_POST['cardNum'];
    $total = 0;
    $i = 1;
    $numLen = strlen($number);
    $digits = substr($number, -4, 4);
    $cardArr = str_split($number);
    $revCard = array_reverse($cardArr);
    echo "<p>Step 1: skeleton</p>";
    echo $number;
    echo "<br>";
    echo $numLen;
    echo "<br>";
    echo $digits;
    echo "<br>";

    echo "<pre>";
    print_r($cardArr);
    print_r($revCard);

    
// loop through arr
    //if even 
        // multiply by two
        //if digit > 9
            // subtract 9
    //total = total + digit 
    // incrementor + 1
// check totoal / 10
    // valid
// else
    // invalid

    foreach ($revCard as $cardNum) {
        echo "<li> $cardNum </li>";

        if($i % 2 == 0) {
            $cardNum *= 2;
            if($cardNum > 9) {
                $cardNum -= 9;

            }

        }


        $total += $cardNum;
        $i++;
    }

    if($total % 10 == 0) {
        echo "Valid";
    } else {
        echo "Invalid";
    }

    


    }


    // add all ODD positions

    // multiple all EVEN positions

    // add both $odd and $even together

    // divide 10 by the $total

    // print valid or invalid
