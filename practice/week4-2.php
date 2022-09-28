<?php

# instructor code examples of arrays using card game
$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);

$playerCards = [];
$computerCards = [];

# VARIATION 2 - modulo operator
# Ref: https://www.php.net/manual/en/language.operators.arithmetic.php
 foreach($cards as $key => $card) {
     if($key % 0 == 0) {
         $playerCards[] = array_pop($cards);
     } else {
         $computerCards[] = array_pop($cards);
     }
 }

# Output results
var_dump($playerCards); # Should yield 5 random cards
var_dump($computerCards); # Should yield 5 different random cards
?>
