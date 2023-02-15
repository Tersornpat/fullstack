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
        <h1>Input ID to delete data</h1>
        <form method="get" action="delete.php">
            <h1>ID</h1>
            <input type="number" size="3" name="id" placeholder="id"><br>
            <button type="submit" style="margin-top: 20px;width: 300px;height: 100px;font-weight: 600px;font-size: 50px;">Submit</button>

        </form>
    <br>
    <?php
        include "connect.php";
        echo"<br>";
        $sql = "SELECT * FROM customer order by IDCust";
        $result = $conn->query($sql);
        $conn->close();
    ?>
            <table border="1">
            <tr>
                <th>IDCust</th>
                <th>CustName</th>
                <th>Address</th>
                <th>Sex</th>
                <th>Tel</th>
            </tr>
            <?php
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                        echo "<td>". $row["IDCust"] ."</td>";
                        echo "<td>". $row["CustName"] ."</td>";
                        echo "<td>". $row["Address"] ."</td>";
                        echo "<td>". $row["Sex"] ."</td>";
                        echo "<td>". $row["Tel"] ."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </center>
</body>
</html>