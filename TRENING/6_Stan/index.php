<?php

    session_start();
    
    $square1=(isset($_SESSION['square1']))? "active" : null; 
    $square2=(isset($_SESSION['square2']))? "active" : null; 
    $square3=(isset($_SESSION['square3']))? "active" : null; 
    $square4=(isset($_SESSION['square4']))? "active" : null; 
    
    session_unset(); 
    session_destroy(); 
    
    var_dump($square1);
    var_dump($square2);
    var_dump($square3);
    var_dump($square4);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>warcaby</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="out">
            <a href="Client.php">
                <div class="inner plum-outter" >
                </div>
            </a>
            <a href="Client.php">
                <div class="inner plum-outter">
                </div>
            </a>
            <a href="Client.php">
                <div class="inner plum-outter">
                </div>
            </a>
            <a href="Client.php">
                <div class="inner plum-outter">
                </div>
            </a>
            <a href="Client.php">
                <div class="inner plum-outter">
                </div>
            </a>
            <a href="Client.php?square=1">
                <div class="inner square" id="<?php echo $square1 ?>">
                </div>
            </a>
            <a href="Client.php?square=2">
                <div class="inner square" id="<?php echo $square2 ?>">
                </div>
            </a>
            <a href="Client.php">
                <div class="inner plum-outter">
                </div>
            </a>
            <a href="Client.php">
                <div class="inner plum-outter">
                </div>
            </a>
            <a href="Client.php?square=3">
                <div class="inner square" id="<?php echo $square3 ?>">
                </div>
            </a>
            <a href="Client.php?square=4">
                <div class="inner square" id="<?php echo $square4 ?>">
                </div>
            </a>
            <a href="Client.php">
                <div class="inner plum-outter">
                </div>
            </a>
            <a href="Client.php">
                <div class="inner plum-outter">
                </div>
            </a>
            <a href="Client.php">
                <div class="inner plum-outter">
                </div>
            </a>
            <a href="Client.php">
                <div class="inner plum-outter">
                </div>
            </a>
            <a href="Client.php">
                <div class="inner plum-outter">
                </div>
            </a>
        </div>
    </body>
</html>
