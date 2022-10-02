<?php
// Create array of throws with three elements 
$throw = ['rock', 'paper', 'scissors'];

// Randomly choose one of the throws from the array and assign it as Player A's move
$playerA = $throw[rand(0, 1, 2)];
// Randomly choose one of the throws from the array and assign it as Player B’s move
$playerB = $throw[rand(0, 1, 2)];

var_dump($playerA);

// Compare Player A move to Player B move with if then loop

// If Player A move is greater, assign value winner to Player A
// If Player A move is same as Player B move, assign value of draw to both players
// Otherwise, assign a value winner to Player B
// Report the results of Player A's Move, Player B's move, and the winner to the page 
// Reset button for playing a new game

require 'index-view.php';

?>