<?php
    $username = "doadmin";
    $password = "AVNS_ZGqDEVhYzUgKYSmPDXX";
    $servername = "fullstackdb-do-user-13569317-0.b.db.ondigitalocean.com:25060";
    $dbname = "fullstack";
    $conn = new mysqli($servername, $username, $password,$dbname) or die("Connect failed: %s\n". $conn -> error);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
