<?php

// check if button was clicked

if(isset($_POST['submit'])) {
    // get the values from form
    $number = $_POST['cardNum'];
    $numLen = strlen($number);
    $digits = substr($number, -4);
    $cardArr = str_split($number);
    $revCard = array_reverse($cardArr);
    echo "<p>Step 1: skeleton</p>";
    echo $number;
    echo "<br>";
    echo $numLen;
    echo "<br>";
    echo $digits;
    echo "<br>";
    print_r($cardArr);
    print_r($revCard);

    foreach($revCard as $card) {
        echo $card;
        if($card % 2 == 0) {
            echo "X";
        }
    }

}