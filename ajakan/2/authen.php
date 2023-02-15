<?php
    session_start();
    include "connectdb.php";
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

            $showdata = "SELECT Admin_ID,Admin_Name,Admin_Surname FROM M_Admin WHERE Admin_User='$username' AND Admin_Pwd='$password';";
            $result = $conn->query($showdata);
            $conn->close();

            $rowcount = mysqli_num_rows($result);

            $row = $result->fetch_assoc();

            if($rowcount == 1){
                $_SESSION['key']='Admin';
                $_SESSION['id']=$row["Admin_ID"];
                $_SESSION['name']=$row["Admin_Name"];
                $_SESSION['surname']=$row["Admin_Surname"];
                header("Location: option.php");
            }else {
                header("Location: index.php");
            }
        ?>
    </center>
</body>
</html>