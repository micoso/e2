<?php
require 'index-view.php';

// Create array of throws with three elements 
$throw = ['rock', 'paper', 'scissors'];

// Randomly choose one throw from the array as Player A move
$playerA = $throw[rand(0, 1, 2)];

// Randomly choose one throw from the array as Player B move
$playerB = $throw[rand(0, 1, 2)];

// Compare Player A throw to Player B throw with if elseif else for wins
if ($playerA == 'rock' && $playerB == 'scissors'){
($playerA == 'Winner');
}elseif ($playerA == 'paper' && $playerB == 'rock'){
($playerA == 'Winner');
}else ($playerA == 'scissors') && ($playerB == 'paper'){
($playerA == 'Winner');
}

// Compare Player A throw to Player B throw with if else for draws and B wins

if ($playerA == $playerB) {
($playerA == 'Draw' && $playerB == 'Draw');
}
else ($playerB == 'Winner')

//var_dump($playerA);
// var_dump($playerB);


// Report the results of Player A's Move, Player B's move, and the winner to the page 
// Reset button for playing a new game
?>