<?php

// $wordsToCount = strlen($_POST['sentence']);


// echo "This string is $wordsToCount characters long.";


if(isset($_POST['submit'])) {
    $sentenceInput = $_POST['sentence'];
    $sentenceCount = strlen($sentenceInput);
    $checked = $_POST['whitespace'];

    if($checked == "N")
    $sentenceCount = strlen($sentenceInput) - substr_count($sentenceInput, ' ');

} else if ($checked== "Y") {
    echo $sentenceCount;
}


echo "This sentence is $sentenceCount long.";