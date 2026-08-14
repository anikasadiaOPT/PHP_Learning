<!-- isset() = returns TRUE if variable is declared and not null.
empty() = returns TRUE if variable is not declared, false, null.
   -->
<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <form action = "14_isset_empty.php" method = "POST">
            <label>username:</label>
            <input type = "text" name = "username"><br>
            <label>password:</label>
            <input type = "password" name = "password"><br>
            <input type = "submit" name = "login" value = "Log in"><br>
        </form>
    </body>
</html>
<?php

    // foreach($_POST as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(empty($username)){
            echo "Username is missed";
        }elseif(empty($password)){
            echo "password is missing";
        }
        else{
            echo "Hello {$username}";
        }
    }
?>