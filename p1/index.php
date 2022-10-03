<?php
require 'index-view.php';

// Create array of throws with three elements 
$throw = ['rock', 'paper', 'scissors'];

// Randomly choose one throw from the array and assign it as Player A's move
$playerA = $throw[rand(0, 1, 2)];

// Randomly choose one throw from the array and assign it as Player B’s move
$playerB = $throw[rand(0, 1, 2)];

// Compare Player A throw to Player B throw with if then
if ($playerA == 'rock' && $playerB == 'scissors');||
($playerA == 'paper') && ($playerB == 'rock') ||
($playerA == 'scissors') && ($playerB == 'paper') 
then ($playerA == 'Winner')

// Compare Player A throw to Player B throw with if then
if ($playerA == 'rock' && $playerB == 'rock') ||
if ($playerA == 'paper' && $playerB == 'paper') ||
if ($playerA == 'scissors' && $playerB == 'scissors')
then ($playerA == 'Draw' && $playerB == 'Draw');

else ($playerB == 'Winner')

//var_dump($playerA);
// var_dump($playerB);



// If Player A move is greater, assign value winner to Player A
// If Player A move is same as Player B move, assign value of draw to both players
// Otherwise, assign a value winner to Player B


// Report the results of Player A's Move, Player B's move, and the winner to the page 
// Reset button for playing a new game
