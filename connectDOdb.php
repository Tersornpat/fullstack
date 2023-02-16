<?php
    $host="fullstackdb-do-user-13569317-0.b.db.ondigitalocean.com";
    $port=25060;
    $socket="";
    $user="tersornpat";
    $password="AVNS_ZGqDEVhYzUgKYSmPDXX";
    $dbname="fullstack";

    $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die ('Could not connect to the database server' . mysqli_connect_error());
?>