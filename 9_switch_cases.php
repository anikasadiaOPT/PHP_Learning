<!-- switch = replacement to using many elseif statements
         more efficient, less code to write -->


<?php 
    $grade = "A";

    switch($grade){
        case "A":
            echo "You did great";
            break;
        case "B":
            echo "You did good";
            break;
        case "C":
            echo "You did okay";
            break;
        case "D":
            echo "You did poorly";
            break;
        case "F":
            echo "You did fail";
            break;
        default:
            echo "{$grade} is not valid.";
    }

    //2
    $date= date("l");

    switch($date){
        case "Friday":
            echo "I love Fridays";
            break;
        case "Saturday":
            echo "Time to party";
            break;
        case "Sunday":
            echo "Time to relax!";
            break;
        case "Monday":
            echo "OH! It's monday..";
            break;
        case "Tuesday":
            echo "It's taco tuesday";
            break;
        case "Wednesday":
            echo "It's a day, mom goes to market";
            break;
        case "Thursday":
            echo "I love Thursdays";
            break;

        default:
            echo "{$date} is not a date."
    }
?>