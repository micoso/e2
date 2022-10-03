<?php
require 'index-view.php';

// Create array of throws with three elements 
$throw = ['rock', 'paper', 'scissors'];

// Randomly choose one throw from the array as Player A move
$playerA = $throw[rand(0, 2)];

// Randomly choose one throw from the array as Player B move
$playerB = $throw[rand(0, 2)];

var_dump($playerA);
var_dump($playerB);


// Compare Player A throw to Player B throw for draws and wins
if ($playerA == $playerB) {
($result = 'Game is a Draw');
}
elseif ($playerA == 'rock' and $playerB == 'scissors'){
($result = 'Winner is Player A');
}elseif ($playerA == 'paper' and $playerB == 'rock'){
($result = 'Winner is Player A');
}elseif($playerA == 'scissors' and $playerB == 'paper'){
($result = 'Winner is Player A');
}else ($result = 'Winner is Player B');

var_dump($result)

//var_dump($playerA);
// var_dump($playerB);


// Report the results of Player A's Move, Player B's move, and the winner to the page 

// Reset button for new game
?>