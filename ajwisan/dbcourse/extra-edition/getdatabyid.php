<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="update.php" method="post">
    <?php
        include "connect.php";

        $id =$_GET["id"];

        echo "<input type='hidden' name='id' value='$id'>";

        $sql = "SELECT * FROM Customer WHERE IDCust='$id'";
        $result = $conn->query($sql);
        $conn->close();

        $row = $result->fetch_assoc();
        echo "<h1>Your CustID is $id</h1>";

        echo "<h1> Name </h1>";
        echo "<input type='text' size='4' name='name' style='width:100px;height:20px' value = " . $row["CustName"]. ">";

        echo "<h1> Sex </h1>";
        echo "<input type='text' name='sex' style='width:100px;height:20px' value = " . $row["Sex"]. ">";

        echo "<h1> Address </h1>";
        echo "<input type='text 'name='address' style='width:100px;height:20px' value = " . $row["Address"]. ">";

        echo "<h1> Tel </h1>";
        echo "<input type='text' name='tel' style='width:100px;height:20px' size='10'  value = " . $row["Tel"]. ">";

    ?>
    <br>
    <button type="submit" style="margin-top: 20px;width: 300px;height: 100px;font-weight: 600px;font-size: 50px;">Submit</button>

    </form>
    </center>
</body>
</html>