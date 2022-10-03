<!-- based on html template page I created in CSCI12 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>P1 Rock Paper Scissors Game by M Soso</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="styles/gamestyles.css">
</head>
<body>
    <header>
        <h1>Rock Paper Scissors</h1> 
    </header>
    <main>
        <p>
       Player A threw $<?php echo $playerA; ?>  Player B threw $<?php echo $playerB; ?>  
        $<?php echo $winner; ?>  is the winner.
       Player A threw $<?php echo $playerA; ?>  Player B threw $<?php echo $playerB; ?> 
       Game is a draw.
    </p>
    </main>
    <footer>    </footer>
</body>

<!--

var_dump($playerA);
//var_dump($playerB);
?>
-->
</html>