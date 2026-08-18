<!DOCTYPE html>
<html>
<head>
    <title>Sanitize and Validate Input</title>
</head>
<body>
    <form action = "19_sanitize_validate_input.php" method = "POST">
        <label for = "uname"> username:</label><br>
        <input type = "text" name = "uname"><br>

        <label for = "age"> age:</label><br>
        <input type = "number" name = "age"><br>

        <label for = "email"> email:</label><br>
        <input type = "email" name = "email"><br>
        <input type = "submit" name = "login" value = "Log in">

    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])){
        //sanitize =  if input in username is Anika123< it will encodes to Anika123&lt; the input and accept it 
        //validate =  if input in email is not valid email format it will reject it

        // $uname = filter_input(INPUT_POST, "uname", FILTER_VALIDATE_NAME);
        $uname = filter_input(INPUT_POST, "uname", FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        if(empty($uname)){
            echo "Please enter a valid username.\n ABC";
        }
        if(empty($age)){
            echo "Please enter a valid age.\n";
        }
        if(empty($email)){
            echo "Please enter a valid email.\n";
        }
        echo "Hi, {$uname} and your age is {$age} and your email is {$email}!";
    }

?>