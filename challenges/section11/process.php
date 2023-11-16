<?php

if(isset($_POST['submit'])) {

    setcookie("name", $_POST["name"]);
    setcookie("age", $_POST["age"]);
    setcookie("color", $_POST["color"]);

}