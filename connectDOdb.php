<?php
    $username = "doadmin";
    $password = "";
    $servername = "fullstackdb-do-user-13569317-0.b.db.ondigitalocean.com:25060";
    $dbname = "test";
    $conn = new mysqli($servername, $username, $password,$dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully <br>";
?>