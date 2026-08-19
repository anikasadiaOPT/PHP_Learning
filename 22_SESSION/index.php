<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <form action = "index.php" method = "POST">
            <label for = "uname"> Username: </label> <br>
            <input type = "text" name = "uname"><br>

            <label for = "pwrd"> Password: </label> <br>
            <input type = "password" name = "pwrd"> <br>

            <input type = "submit" name = "login" value = "login">
            
        </form>
    </body>
</html>

<?php
    

    if(isset($_POST["login"])){
        $_SESSION["uname"] = $_POST["uname"];
        $_SESSION["pwrd"] = $_POST["pwrd"];
        
        if(!empty($_POST["uname"]) && !empty($_POST["pwrd"])){
            $_SESSION["uname"] = $_POST["uname"];
            $_SESSION["password"] = $_POST["pwrd"];

            header("Location: home.php");
            // echo "<br>" .$_SESSION["uname"] . "<br>";
            // echo $_SESSION["password"] . "<br>";

        }
    }else{
        echo "Missing username/password";
    }
?>