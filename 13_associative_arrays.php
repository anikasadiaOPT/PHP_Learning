<!-- associative arrays = An array made of key-> value pairs.
                     countries -> capitals 
                     id -> username
                     item -> price -->

<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <form action = "13_associative_arrays.php" method = "POST">
            <label>Enter a country:</label>
            <input type = "text" name = "country">
            <input type = "submit"><br>
        </form>
    </body>
</html>
<?php
    $capitals = array("USA"=> "Washington D.C.",
                      "South Korea"=>"Seoul",
                      "Japan"=>"Kyoto",
                      "Bangladesh"=>"Dhaka");

    $capital = $capitals[$_POST["country"]];
    echo "The capital of {$_POST["country"]} is:{$capital}";
    
    // foreach($capitals as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }



?>