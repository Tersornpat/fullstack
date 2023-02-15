<?php
    include "session.php";
?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authen</title>
</head>
<body style="margin:0;border:0;padding:0;">
    <center>
        <?php
            $username = $_POST["username"];
            $password = $_POST["password"];
            if($username == "admin" && $password == "1234"){
                $_SESSION['key']='admin';
                header("Location: listitem.php");
            }
        ?>
    </center>
</body>
</html>