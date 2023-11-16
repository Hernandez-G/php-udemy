<?php

session_start();

if(isset($_SESSION['name'])) {
    echo $_SESSION['name'];
} else {
    echo "Session has not been set.";
}

if(isset($_SESSION['age'])) {
    echo $_SESSION['age'];
} else {
    echo "Session has not been set.";
}