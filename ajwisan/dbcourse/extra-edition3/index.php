<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Com  patible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Customer List</h1>
        <?php
        include "connect.php";

        #Select All Data
        $sql = "SELECT * FROM Customer Order By IDCust";
        $result = $conn->query($sql);
        $conn->close();
    ?>
    <br>
    <form action="deletebyid.php" method="post">
    <table border="1">
                <tr>
                    <th>IDCust</th>
                    <th>CustName</th>
                    <th>Sex</th>
                    <th>Address</th>
                    <th>Tel</th>
                    <th>Delete</th>
                </tr> 
    <?php

        #Print All Data And Use Check Box To Delete
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
                echo "<td>". $row["IDCust"] ."</td>";
                echo "<td>". $row["CustName"] ."</td>";
                echo "<td>". $row["Sex"] ."</td>";
                echo "<td>". $row["Address"] ."</td>";
                echo "<td>". $row["Tel"] ."</td>";
                echo "<td align='center'><input type='checkbox' name='check[]' value='".$row["IDCust"]."'></td>";
            echo "</tr>";
        }
    ?>
    </table>
    <input type="submit">    
    </form>
</center>
</body>
</html>