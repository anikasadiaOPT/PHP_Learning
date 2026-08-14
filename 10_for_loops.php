<?php
    for($i = 0; $i <5; $i++){
        echo "{$i} Hello<br>";
    }
    echo "<br>";
    for($i = 10; $i >0; $i-=2){
        echo "{$i} Hello<br>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <form action = "10_for_loops.php" method = "POST">
            <label>Enter a number to count down from:</label>
            <input type = "text" name = "counter">
            <input type = "submit" value = "Start">
        </form>
    </body>
</html>

<?php
    $counter = $_POST["counter"];
    for($i = $counter; $i >= 0; $i--){
        echo "{$i}<br>";
    }
?>