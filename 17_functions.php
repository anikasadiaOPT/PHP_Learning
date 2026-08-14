<!-- function = write some code once, reuse when you need it
           type() after function name to invoke
           ex. add() substract( ) divide() -->

<?php
    function happy_birthday($first_name, $age){
        echo "Happy Birthday to you. <br>";
        echo "Happy Birthday to you. <br>";
        echo "Happy Birthday to you, dear {$first_name}. <br>";
        echo "Happy Birthday to you. <br>";
        echo "You are {$age} years old!<br><br>";
    }

    happy_birthday("Spoongbob", 30);

    function is_even($number){
        if($number % 2 == 0){
            echo "{$number} is even.<br>";
        }else{
            echo "{$number} is odd.<br>";
        }
    }
    is_even(11);

    function hypotenuse($a, $b){
        $c = sqrt($a **2 + $b ** 2);
        return $c;
    }
    $a = 3;
    $b = 4;
    echo "The Hypotenuse of {$a} and {$b} is " . hypotenuse($a, $b);
?>