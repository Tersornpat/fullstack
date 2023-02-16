<?php
    session_start();
    // include "session.php";
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
                echo "<script>alert('Login Success')</script>";
                echo "<Iframe width='100%' height='962px' src='resume.html'></Iframe>";
            }else{
                echo "<script>alert('Login Failed')</script>";
                echo "<h1>Login failed</h1><br><a href='signin.html'><input type='submit' value='back'></a>";
            }
        ?>
    </center>
</body>
</html>