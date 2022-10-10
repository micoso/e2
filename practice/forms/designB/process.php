<?php

session_start();

$answer = $_POST['answer'];

if ($answer == 'pumpkin') {
    $correct = true;   
} else {
    $correct = false;  
}


# $answer = $_POST['answer'];
# $correct = $answer == 'pumpkin';
# require 'process-view.php';

$_SESSION['results'] = [
    'haveAnswer' => $haveAnswer,
    'correct' => $correct
];

//var_dump($_SESSION);

header('Location: done.php');