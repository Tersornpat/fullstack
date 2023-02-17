<?php
    $username = "tersornpat";
    $password = " ";
    $servername = "128.199.234.176";
    $dbname = "pts";
    $conn = new mysqli($servername, $username, $password,$dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully <br>";
?>