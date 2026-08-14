<!-- arrays = "variables " which can hold more values at a time -->

<?php
    $foods = array("apples", "banana", "coconut", "kiwi");
    echo $foods[2] . "<br>";

    foreach ($foods as $food) {
        echo "{$food} <br>";
    }
    array_push($foods, "pineapple", "mango");
    echo "<br>";
    foreach ($foods as $food) {
        echo "{$food} <br>";
    }

    array_pop($foods);
    echo "<br>";
    foreach ($foods as $food) {
        echo "{$food} <br>";
    }
    $reversed = array_reverse($foods);
    echo "<br>";
    foreach ($reversed as $food) {
        echo "{$food} <br>";
    }

    echo count($foods);
?>