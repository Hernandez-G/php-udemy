<?php

$string = "I love this website but feel that the stupid badword1 comments are detracting from the user
experience. The person who wrote this is a badword2.";

echo $string;
echo"<br>";

$word1= "badword1";
$word2 = "badword2";

$replacedStr = str_replace([$word1, $word2], "*****", $string);

echo"<br>";
echo $replacedStr;