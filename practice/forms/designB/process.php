<?php

$answer = $_POST['answer'];

if ($answer == 'pumpkin') {
    $correct = true;   
} else {
    $correct = false;  
}


# $answer = $_POST['answer'];

# $correct = $answer == 'pumpkin';

require 'process-view.php';

