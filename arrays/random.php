<?php

$cities = ["London", "Paris", "Brisbane", "Berlin"];

$city = $cities[2];

echo $city;

echo "<br>";

$cityPositionInArr = array_rand($cities);

$city = $cities[$cityPositionInArr];

echo $city;