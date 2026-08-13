<!DOCTYPE html>
<html>
<head>
    <title>Circumference Calculator</title>
</head>
<body>
    <h1>Circumference Calculator</h1>
    <form action="6_Circumference.php" method="POST">
        <label>Radius:</label>
        <input type="number" name="radius" step="0.01" required><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php
    $r = $_POST["radius"];
    $circumference = round((2 * pi() * $r), 3);

    echo "The circumference of {$r} is: {$circumference}<br>";

    $area = round((pi() * ($r ** 2)), 3);
    echo "The area of a circle with radius {$r} is: {$area}<br>";

    $volume = round((4/3 * pi() * ($r ** 3)), 3);
    echo "The volume of a sphere with radius {$r} is: {$volume}";
?>
