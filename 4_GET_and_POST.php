<?php 
    // $_GET, $POST = special variables used to collect data from an HTML 
    //                 form. data is sent to the file in the action attribute for <form>
    //                 <form action = "some_file.php" method = "GET">
    // $_GET = Data is appended to the URL,
    //         NOT SECURED.
    //         char limit,
    //         Bookmark is possible w/ values
    //         GET requests can be reached,
    //         Better for a search page.
    // $_POST = Data is packaged inside the body of the HTTP request
    //         MORE SECURE.
    //         No char limit,
    //         Bookmarking is NOT possible.
    //         GET requests are not cached
    //         BETTER for submitting credentials
?>

<DOCTYPE html>
<html>
<head>
    <title>GET and POST Example</title>
</head>
<body>
    <form action = "4_GET_and_POST.php" method = "POST">
    <label>Username:</label><br>
    <input type = "text" name = "username"><br>
    <label>Password:</label><br>
    <input type = "password" name = "password"><br>

    <label>Quantity:</label><br>
    <input type = "number" name = "quantity"><br>
    <input type = "submit" value = "Log in"><br>
    
    </form>
</body>
</html>

<?php 
    // echo $_GET["username"] . "<br>";
    // echo $_GET["password"] . "<br>";

    echo $_POST["username"] . "<br>";
    echo $_POST["password"] . "<br>";

    $item = "Pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = $price * $quantity;

    echo "You ordered {$quantity} x {$price} for \${$total}";
?>