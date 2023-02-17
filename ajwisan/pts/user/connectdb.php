<?php
    $username = "tersornpat";
    $password = "1234";
    $servername = "128.199.234.176";
    $dbname = "pts";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        echo ' not connected';
    }
    else
        echo 'connected';
?>