<?php


// Create array of throws with three elements 
$throw = ['rock', 'paper', 'scissors'];

// Randomly choose one throw from the array as Player A move
$playerA = $throw[rand(0, 2)];

// Randomly choose one throw from the array as Player B move
$playerB = $throw[rand(0, 2)];

// Compare Player A throw to Player B throw for draws and wins
if ($playerA == $playerB) {
($result = 'Game is a Draw');
}
elseif ($playerA == 'rock' and $playerB == 'scissors'){
($result = 'Winner is Player A');
}elseif ($playerA == 'paper' and $playerB == 'rock'){
($result = 'Winner is Player A');
}elseif ($playerA == 'scissors' and $playerB == 'paper'){
($result = 'Winner is Player A');
}else ($result = 'Winner is Player B');


require 'index-view.php';

?>