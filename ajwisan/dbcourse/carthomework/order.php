<?php
    include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin:0;padding:0;font-family: TH SarabunPSK;font-size: 30px;">
    <?php
        include "connect.php";
    ?>
    <center>
        <form action="confirmstock.php" method="post">
            <br>
            Cutomer ID
            <input type="text" require required name="id" required style="width:100px;height:20px">
                <table border="1">
                    <h3>Your Cart</h3>
                    <tr height ="48.33px" width="100%">
                        <th height ="48.33px" width = 10%>ID</th>
                        <th height ="48.33px" width = 30%>Name</th>
                        <th height ="48.33px" width = 15%>Price/Unit</th>
                        <th height ="48.33px" width = 15%>Cart</th>
                    </tr>
                        <?php
                            $sql = "SELECT * FROM product WHERE id BETWEEN 1 AND 8 Order By id";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) { 
                                echo "<tr height='50px' align='center' width='100%'>
                                                <td >". $row["id"] ."</td>
                                                <td >". $row["name"] ."</td>
                                                <td >". $row["price"] ."</td>
                                                <td><input type='number' name='value[]' value='0'>
                                            </tr>";
                            }
                        ?>
                    </table>
            <input type="submit">
            <br><br><br><br><br><br><br><br><br><br>
            <table border="1">
                <h1>Customer ID list</h1>
                <?php
                    $sql = "SELECT * FROM customer WHERE id BETWEEN 1 AND 8 Order By id";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) { 
                        echo "<tr height='50px' align='center' width='100%'>
                                    <td>". $row["id"] ."</td>
                                    <td>". $row["firstname"] ."</td>
                                    <td>". $row["lastname"] ."</td>
                                    <td>". $row["sex"] ."</td>
                                    <td>". $row["address"] ."</td>
                                    <td>". $row["tel"] ."</td>
                                </tr>";
                    }
                ?>
            </table>
        </form>
    </center>
    <?php
        $conn->close();
    ?>
</body>
</html>