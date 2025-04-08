<?php

    // Setting a cookie
    setcookie("username", "Sarvesh", time()+30*24*60*60);
    
    // Verifying whether a cookie is set or not
    if(isset($_COOKIE["username"])){
        echo "Hi " . $_COOKIE["username"] . "\n";
    } else{
        echo "Welcome Guest!\n";
    
    }
    
    print_r($_COOKIE);
    echo "<br>This Program is Written by Varun Sharma 0221BCA136";
?>