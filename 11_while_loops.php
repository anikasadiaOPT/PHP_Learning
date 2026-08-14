<!-- while loop = do some code infinitely while some 
             condition remains true -->



<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <form action = "11_while_loops.php" method = "POST">
            <label>Enter a number to count:</label>
            <input type = "text" name = "counter">
            <input type = "submit" value = "Start">
            <input type = "submit" name = "stop" value = "Stop">
        </form>
    </body>
</html>
<?php 
    $counter = $_POST["counter"];
    $running = true;
    while($running){
        if(isset($_POST["stop"])){
            $running = false;
        }else{
            $counter++;
            echo "{$counter}<br>";
        }
    }
    // $seconds = 0;
    // $running = true;
    // while($running){
    //     //wait 1sec
    //     $seconds++;
    //     echo "{$seconds}<br>";
    // }
?>

