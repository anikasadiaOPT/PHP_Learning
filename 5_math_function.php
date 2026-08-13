<!DOCTYPE html>
<html>
<head>
    <title>Math Functions</title>
</head>
<body>
    <h1>Math Functions in PHP</h1>
    <form action="5_math_function.php" method="POST">
        <label>Number 1:</label>
        <input type="number" name="num1"><br>
        <label>Number 2:</label>
        <input type="number" name="num2"><br>

        <label>Number 3:</label>
        <input type="text" name="num3"><br>
        <input type="submit" value="Calculate">

    </form>
</body>
</html>

<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $total = abs($num1 + $num2);
    echo "The total of {$num1} and {$num2} is: {$total}<br>";

    $num3 = $_POST["num3"];
    $round_n = round($num3);
    $floor_n = floor($num3);
    $ceil_n = ceil($num3);

    echo "The rounded value of {$num3} is: {$round_n}<br>";
    echo "The floored value of {$num3} is: {$floor_n}<br>";
    echo "The ceiled value of {$num3} is: {$ceil_n}<br>";

?>