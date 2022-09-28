<?php

# instructor code examples of arrays using card game
$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);

$playerCards = [];
$computerCards = [];



# VARIATION 1
$dealTo = 'player';
foreach ($cards as $key => $card) {
    if ($dealTo == 'player') {
        $playerCards[] = array_pop($cards);
        $dealTo = 'computer';
    } else {
        $computerCards[] = array_pop($cards);
        $dealTo = 'player';
    }
}

# Output results
var_dump($playerCards); # Should yield 5 random cards
var_dump($computerCards); # Should yield 5 different random cards
?>