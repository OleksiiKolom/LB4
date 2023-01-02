<?php 
    session_start();
    header('Content-type: text/plain'); 

    if(isset($_COOKIE["username"])) {
        echo "COOKIE: " . $_COOKIE["username"] . PHP_EOL;
    } 

    echo "SESSION: " . $_SESSION["username"];
?> 