<?php

if(isset($_COOKIE['name'])){
    $name = $_COOKIE['name'];
    $age = $_COOKIE['age'];
    $color = $_COOKIE['color'];

    echo "<br>";
    echo "your name is $name". "<br>";
    echo "you are $age years old". "<br>";
    echo "your favorite color is $color". "<br>";
    
}