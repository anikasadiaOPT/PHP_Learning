<?php
    $username = "Anika Sadia ";

    $username = strtolower($username);
    echo $username ."<br>";

    $username = strtoupper($username);
    echo $username ."<br>";

    $username = trim($username);
    echo $username ."<br>";

    $username = str_pad($username, 20, "0");
    echo $username ."<br>";

    $phone = "123-456-789";
    $phone_number = str_replace("-", " " , $phone);
    echo $phone_number."<br>";


    $username = strrev($username);
    echo $username ."<br>";

    $user = "Anika";
    $equals = strcmp($user, "Anika");
    echo $equals . "<br>";

    $user = "Ani ka";
    $count = strlen($user);
    echo $count . "<br>";

    $user = "Ani ka";
    $idx = strpos($user, "A");
    echo $idx . "<br>";

    $user = "Ani ka";
    $first_part = substr($user, 0, 3);
    echo $first_part . "<br>";

    $user = "Ani ka";
    $last_part = substr($user, 3);
    echo $last_part . "<br>";

    $user = "Anika";
    $first_part = explode(" ",$user);
    foreach($first_part as $first){
        echo $first . "<br>";
    }
    $user = array("Anika", "Sadia", "Afrin");
    $full_name = implode("-", $user);
    echo $full_name;
?>