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
            This is a home page.<br>
            <a href = "index.php">This goes to login page.</a>
            <input type = "submit" name = "logout" value = "Log out">
        </form>
        
    </body>
</html>

<?php
    // $_SESSION["uname"] = "ANIKA";
    // $_SESSION["password"] = "pizza123";

    // echo "<br>" .$_SESSION["uname"] . "<br>";
    // echo $_SESSION["password"] . "<br>";

    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: index.php");
    }
?>