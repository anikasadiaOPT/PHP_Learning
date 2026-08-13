<!-- if statement = if some condition is true do something,
                if the condition is false, don't do it. -->



<?php
    $age = 23;
    if ($age >= 18) {
        echo "You are an adult.";
    } 
    else if ($age >= 13) {
        echo "You are a teenager.";
    } else {
        echo "You are a minor.";
    }

    //2
    $adult = true;
    if($adult == true){
        echo "You may enter this site";
    }
    else{
        echo "You may not enter this site";
    }

    //3
    $hours = 40;
    $rate = 20;
    $weekly_pay = null;

    if($hours <=0){
        $weekly_pay = 0;
    }
    else if($hours <= 40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = 40 * $rate + ($hours - 40) * $rate * 1.5;
    }
    echo "You made \${$weekly_pay} this week."
?>