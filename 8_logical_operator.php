<!-- logical operators = combine conditional statements
                    if(cond && cond)
&& = True if both conditions are true
|| = True if at least one condition is true
! = True if the condition is false -->

<?php
    $temp = 25;
    $cloudy = true;

    if($temp >= 0 && $temp <= 30){
        echo "The weather is good<br>";
    }else if($temp > 30){
        echo "The weather is hot <br>";
    }else{
        echo "The weather is cold<br>";
    }

    if($cloudy){
        echo "The weather is cloudy<br>";
    }else{
        echo "The weather is sunny<br>";
    }

    //3
    $age = 25;
    $citizen = true;

    if($age && $citizen){
        echo "You are eligible to vote<br>";
    }else{
        echo "You are not eligible to vote<br>";
    }

    if(!$age && !$citizen){
        echo "You are eligible to vote<br>";
    }else{
        echo "You are not eligible to vote<br>";
    }

?>