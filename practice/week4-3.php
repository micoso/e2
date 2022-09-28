<?php

# instructor code examples of arrays using card game
$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);

$playerCards = [];
$computerCards = [];

# VARIATION 3 - Popping the dealt card before the loop
 foreach ($cards as $key => $card) {
     $cardToDeal = array_pop($cards);

    if ($key % 2 == 0) {
         $playerCards[] = $cardToDeal;
     } else {
         $computerCards[] = $cardToDeal;
     }
 }

# Output results
var_dump($playerCards); # Should yield 5 random cards
var_dump($computerCards); # Should yield 5 different random cards
?>