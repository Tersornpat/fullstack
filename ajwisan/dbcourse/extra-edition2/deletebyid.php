<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "connect.php";

        $sql = "SELECT * FROM Customer WHERE IDCust='$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        ?>
        <Center>
            <br><br><br><br><br>
        <table border="1">
        <form action="delete.php" method="post">
        <?php
            echo "
                    <tr><td>Your Cust id is </td><td>".$row['IDCust']."</td></tr>
                    <tr><td>Your Cust Name is </td><td>".$row['CustName']."</td></tr>
                    <tr><td>Your Cust Sex is </td><td>".$row['Sex']."</td> </tr>
                    <tr><td>Your Cust Address is </td><td> ".$row['Address']."</td></tr>
                    <tr><td>Your Cust Tel is </td><td>".$row['Tel']."</td></tr>
                    </table><br>
                    ";
            $conn->close();
            echo "<input type='hidden' name='id' value='$id'>"
        ?>

        <input type="submit">
        <a href="index.php"><input type="button" value="Cancel"></input></a>
        </form>
    </center>
    
</body>
</html>