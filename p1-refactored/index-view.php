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
        <ul class="results">
          <li> Player A threw <?php echo $playerA;?> <br><br></li> 
          <li> Player B threw <?php echo $playerB;?> <br><br></li>
          <li> <?php echo $result;?></li>
        </ul>  

    </main>
    <footer>    </footer>
</body>

</html>
