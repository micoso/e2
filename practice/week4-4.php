<?php

# instructor code examples of arrays using card game
$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);

$playerCards = [];
$computerCards = [];

# VARIATION 4 - Dynamic variables
 foreach ($cards as $key => $card) {
     if ($key % 2 == 0) {
         $dealTo = 'playerCards';
     } else {
         $dealTo = 'computerCards';
     }

     # Dynamic variables : https://www.php.net/manual/en/language.variables.variable.php
     $$dealTo[] = array_pop($cards);
 }

# Output results
var_dump($playerCards); # Should yield 5 random cards
var_dump($computerCards); # Should yield 5 different random cards
?>