<!-- variables = a reusable containers that holds data strings, integer, float , boolean -->
<?php
    $name = "Sadia Afrin";
    echo $name;
    echo "<br>Hello {$name}";

    $food = "pizza";
    echo "<br>I like {$food}";

    $email = "sadia@example.com";
    echo "<br>My email is {$email}";

    //int
    $age = 25;
    echo "<br>You are {$age} years old.";

    $users = 2;
    echo "<br>You have {$users} new messages.<br>";

    $quantity = 3;
    echo "You would like {$quantity} items<br>";

    //float
    $price = 19.99;
    echo "<br>The price is \${$price}.";

    $rating = 4.5;
    echo "<br>This product has a rating of {$rating} stars.<br>";

    $tax_rate = 5.1;
    echo "The sales tax rate is {$tax_rate}% <br>";

    //boolean
    $online = false;
    echo "<br>You are " . ($online ? "online" : "offline") . ".<br>";

    echo "You have ordered {$quantity} x {$food}";

    $total = null; // no value 
    $total = $quantity * $price;
    echo "Your total is \${$total}.";   



?>