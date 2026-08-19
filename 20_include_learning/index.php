<?php
    include("header.html");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <form action = "16_checkboxes.php" method = "POST">
            <label>Fruits:</label><br>
            <input type = "checkbox"  name = "foods[]" value = "Mango">Mango <br>
            <input type = "checkbox"  name = "foods[]" value = "Apple">Apple <br>
            <input type = "checkbox"  name = "foods[]" value = "Pineapple">Pineapple <br>
            <input type = "checkbox"  name = "foods[]" value = "Kiwi">Kiwi<br>
            
            <input type = "submit" name = "submit" value = "Submit"><br>
        </form>
    </body>
</html>

<?php
    include("footer.html");
?>