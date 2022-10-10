<!doctype html>
<html lang='en'>
<head>
    <title>Mystery Word Scramble Results</title>
    <meta charset='utf-8'>
    <link href=data: , rel=icon>

    <style>
    .correct {
        color: green;
    }    

    .incorrect {
        color: red;
    }
    </style>
</head>

<body>

<h1>Your Results</h1>

<?php if ($haveAnswer == false) { ?>
Please enter an answer.
<?php } elseif ($correct) { ?>
<div class='correct'>
    You are correct! 10 points to Hufflepuff! :)</div>
<?php } else { ?>
<div class='incorrect'>
    Sorry incorrect :(</div>
<?php } ?>

<a href='index.php'>Click to play again.
    

</body>
</html>