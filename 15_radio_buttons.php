<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <form action = "15_radio_buttons.php" method = "POST">
            <label>Bank Card:</label><br>
            <input type = "radio"  name = "card" value = "Visa">Visa <br>
            <input type = "radio"  name = "card" value = "Master Card">MasterCard <br>
            <input type = "radio"  name = "card" value = "Debit Card">Debit Card <br>
            <input type = "radio"  name = "card" value = "American Express">American Express<br>
            
            <input type = "submit" name = "confirm" value = "Confirm"><br>
        </form>
    </body>
</html>

<?php
    if(isset($_POST["confirm"])){
        $credit_card = null;
        if(isset($_POST["card"])){
            $credit_card = $_POST["card"];
        }
        if($credit_card == "Visa"){
            echo "You selected {$credit_card}";
        }elseif($credit_card == "Master Card"){
            echo "You selected {$credit_card}";
        }elseif($credit_card == "Debit Card"){
            echo "You selected {$credit_card}";
        }elseif($credit_card == "American Express"){
            echo "You selected {$credit_card}";
        }
        else{
            echo "Please make a selection.<br>";
        }
    }
?>