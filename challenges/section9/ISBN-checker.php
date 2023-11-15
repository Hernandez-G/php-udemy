<?php


// check if the form has been submitted

if(isset($_POST['submit'])) {
    // assign post variable isbn number
    $isbn = $_POST['isbn'];
    
        // total, incrementor
    $total = 0;
    $i = 1;
        
        // split str 
    $digits = str_split($isbn);
        
        // loop through array

    foreach($digits as $digit) {
        // update the total = digit * 1, 2, 3, etc  
        $total += $digit * $i;
        $i++;
    }
        
        // check if total / 11

        //echo valid or invalid
        if($total % 11 == 0) {
            echo "valid";
        }    else {

            echo "invalid";
        }    

}