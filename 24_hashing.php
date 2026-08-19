<!-- hashing = transforming sensitive data or password
          into letters, numbers and/or symbols
          via a mathematical process(similar to encryption)
          hides the original data from 3rd parties. -->

<?php 
    $password = "pizza13";
    // $hash = password_hash($password, Hashing Algorithm)
    $hash = password_hash($password, PASSWORD_DEFAULT); // const = bcrpyt algorithm
    // echo $hash;
    if(password_verify("pizza13", $hash)){
        echo "You are logged in";
    }else{
        echo "incorrect password";
    }
?>