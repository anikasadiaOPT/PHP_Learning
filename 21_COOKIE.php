<!-- cookie = Information about a user stored in a user's web-browser
         targeted advertisements, browsing preferences, and 
         other non-sensitive data -->

<?php
    // setcookie("key", "value", "expiration time", "file_path");
    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
    setcookie("fav_drink", "Choco_milk", time() + (86400*3) , "/");
    setcookie("fav_dessert", "Jorda", time() + (86400 * 4) , "/");

    foreach($_COOKIE as $key=> $value){
        echo "{$key} - {$value} <br>";
    }
    echo "<br>";
    
    if(isset($_COOKIE["fav_food"])){
        echo "Buy some {$_COOKIE["fav_food"]}!!!";
    }else{
        echo "I don't know your favourite food";
    }
?>