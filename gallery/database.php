<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "binary_threadsdb";
    $conn = "";

    $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

    if($conn){
        echo"database connected";
    }
    
?>
