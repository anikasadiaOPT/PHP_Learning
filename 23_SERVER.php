<!-- $_SERVER = SGB that contains header, path, and script location.
           The entries in this array are created by the web server.
           Shows nearly everything you need to know about the current web page env.

            -->



<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <form action = "<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method = "POST">
            <label for = "uname"> Username: </label> <br>
            <input type = "text" name = "uname"><br>

            <label for = "pwrd"> Password: </label> <br>
            <input type = "password" name = "pwrd"> <br>

            <input type = "submit" name = "login" value = "login">
            
        </form>
    </body>
</html>
<?php 
    // foreach($_SERVER as $key => $value){
    //     echo "{$key} => {$value}<br>";
    // }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "HEllo";
    }
?>