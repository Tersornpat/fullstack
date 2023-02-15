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

    $id =strval( $_GET["id"]);
    $name = strval($_GET["name"]);
    $address = strval($_GET["address"]);
    $tel = strval($_GET["tel"]);
    $sex = "M";
    
    $update = "UPDATE customer SET CustName = '$name', Address = '$address', Tel= '$tel' WHERE IDCust    = $id;";
    $conn -> query($update);

    $sql = "SELECT * FROM customer order by IDCust";
    $result = $conn->query($sql);
    $conn->close();
?>

    <form method="get" action="update.php">
        <center>
            <h1>ID</h1>
            <input type="number" size="3" name="id" placeholder="id">
            <h1>Name</h1>
            <input type="text" name="name" placeholder="name">
            <h1>Address</h1>
            <input type="text" name="address" placeholder="address">
            <h1>Tel</h1>
            <input type="number" size = 10 name="tel" placeholder="tel"><br>
            <button type="submit" style="margin-top: 20px;width: 300px;height: 100px;font-weight: 600px;font-size: 50px;">Submit</button>
        </center>
        </form>
    <br>
    <br>
    <center>
        <table border="1">
            <tr>
                <th>IDCust</th>
                <th>CustName</th>
                <th>Address</th>
                <th>Tel</th>
            </tr>
            <?php
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                        echo "<td>". $row["IDCust"] ."</td>";
                        echo "<td>". $row["CustName"] ."</td>";
                        echo "<td>". $row["Address"] ."</td>";
                        echo "<td>". $row["Tel"] ."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </center>
</body>
</html>