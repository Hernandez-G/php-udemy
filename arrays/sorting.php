<?php

$names = ["brad", "chad", "super chad", "emmy"];

rsort($names);

echo "<ul>";

foreach($names as $name) {
    echo "<li>$name</li>";
}

echo"</ul>";