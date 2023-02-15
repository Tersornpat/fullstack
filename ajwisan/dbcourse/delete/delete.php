<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php
    include "connect.php";

    $id =strval( $_GET["id"]);
    
    $delete = "DELETE FROM Customer WHERE IDCust='$id'";
    $conn -> query($delete);

    $sql = "SELECT * FROM customer order by IDCust";
    $result = $conn->query($sql);
    $conn->close();
?>

    <form method="get" action="delete.php">
        <center>
            <h1>ID</h1>
            <input type="number" size="3" name="id" placeholder="id"><br>
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