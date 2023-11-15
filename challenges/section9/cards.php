<?php

$suit = ["clubs", "diamonds", "hearts", "spades"];
$cards = ["Ace", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Jack", "Queen", "King"];



// manually
$pickOne = $suit[1];
echo "your card is a ". $cards[2]. " of". " ". $pickOne;

// randomized

$randomSuit = array_rand($suit);
$suit1 = $suit[$randomSuit];

// echo $suit1;

$randomCard = array_rand($cards);
$card1 = $cards[$randomCard];

// echo $card1;



echo "<br>";

echo "The randomly selcted card is the ". $card1. " of". " ". $suit1;