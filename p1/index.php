<?php
require 'index-view.php';

// Create array of throws with three elements 
$throw = ['rock', 'paper', 'scissors'];

// Randomly choose one throw from the array as Player A move
$playerA = $throw[rand(0, 1, 2)];

// Randomly choose one throw from the array as Player B move
$playerB = $throw[rand(0, 1, 2)];

// Compare Player A throw to Player B throw for draws and wins
if ($playerA == $playerB) {
($playerA && $playerB == 'Draw');
}
elseif ($playerA == 'rock' && $playerB == 'scissors'){
($playerA == 'Winner');
}elseif ($playerA == 'paper' && $playerB == 'rock'){
($playerA == 'Winner');
}elseif($playerA == 'scissors' && $playerB == 'paper'){
($playerA == 'Winner');
}else ($playerB == 'Winner')


//var_dump($playerA);
// var_dump($playerB);


// Report the results of Player A's Move, Player B's move, and the winner to the page 

// Reset button for new game
?>