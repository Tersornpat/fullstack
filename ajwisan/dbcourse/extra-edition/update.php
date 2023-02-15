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

    $id = $_POST["id"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $tel = $_POST["tel"];
    $sex = $_POST["sex"];
    
    $update = "UPDATE Customer SET CustName = '$name', Address = '$address',Sex = '$sex', Tel= '$tel' WHERE IDCust    = $id;";
    $conn -> query($update);

    $sql = "SELECT * FROM Customer WHERE IDCust    = $id;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $conn->close();
?>
<br>
    <center>
        <table border="1">
            <tr>
                <th>IDCust</th>
                <th>CustName</th>
                <th>Sex</th>
                <th>Address</th>
                <th>Tel</th>
            </tr>
            <?php
            echo "<tr>";
                echo "<td>". $row["IDCust"] ."</td>";
                echo "<td>". $row["CustName"] ."</td>";
                echo "<td>". $row["Sex"] ."</td>";
                echo "<td>". $row["Address"] ."</td>";
                echo "<td>". $row["Tel"] ."</td>";
            echo "</tr>";
            ?>
        </table>
    </center>
</body>
</html>