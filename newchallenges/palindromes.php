<?php

if(isset($_POST['submit'])) {
    $word1 = $_POST['check'];
    //reverse the str
    $word2 = strrev($word1);
    
    // if the rev str is == $word1
    if ($word2 == $word1) {
 echo "Yes, $word1 is a palindrome." . "<br>";

} else {

    echo "No, $word1 is not a palindrome.";
}

}