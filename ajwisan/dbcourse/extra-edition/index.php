<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Com  patible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="getdatabyid.php">
        <center>
            <h1>Input ID </h1>
            <input type="number" name="id" placeholder="id"> 
            <button type="Submit"> Submit</button>
        </center>
    </form>
    <center>
        <?php
        include "connect.php";
    
        $sql = "SELECT * FROM Customer Order By IDCust";
        $result = $conn->query($sql);
        $conn->close();
    ?>
    <br>
    <table border="1">
                <tr>
                    <th>IDCust</th>
                    <th>CustName</th>
                    <th>Sex</th>
                    <th>Address</th>
                    <th>Tel</th>
                </tr>
    <?php
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
                echo "<td>". $row["IDCust"] ."</td>";
                echo "<td>". $row["CustName"] ."</td>";
                echo "<td>". $row["Sex"] ."</td>";
                echo "<td>". $row["Address"] ."</td>";
                echo "<td>". $row["Tel"] ."</td>";
            echo "</tr>";
        }
    ?>
    </table>
    </center>
</body>
</html>