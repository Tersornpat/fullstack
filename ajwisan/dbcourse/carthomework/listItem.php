<?php
    include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This page will show available list</title>
</head>
<body style="margin:0;padding:0;font-family: TH SarabunPSK;font-size: 30px;">

    <?php
        include "connect.php"
    ?>

    <table border="0" width ="100%" height ="968px">
        <tr width = "100%"height="10%">
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr width = "100%"height="60%">
            <td width ="20%"></td>
            <td width ="60%">
                <table border="0" width="100%" height="100%">
                    <tr align="center" width="15%"><td style="font-size: 50px;">This Is Available Item</td></tr>
                    <tr height="70%">
                        <td align="center">
                            <table border = "1"  width="80%" align="center" height="100%">

                                <tr height ="48.33px" width="100%">
                                    <th height ="48.33px" width = 10%>ID</th>
                                    <th height ="48.33px" width = 40%>Name</th>
                                    <th height ="48.33px" width = 15%>Stock</th>
                                    <th height ="48.33px" width = 15%>Per Unit</th>
                                    <th height ="48.33px" width = 20%>Total</th>
                                </tr>

                                <?php
                                    $sql = "SELECT * FROM product WHERE id BETWEEN 1 AND 8 Order By id";
                                    $result = $conn->query($sql);
                                    $conn->close();

                                    $a = 20;
                                    $total =0;
                                    while($row = $result->fetch_assoc()) { 
                                        $sum = $row["unit"] *$row["price"];
                                        $total += $sum;

                                        echo "<tr height='50px' align='center' width='100%'>
                                                    <td height='15px'>". $row["id"] ."</td>
                                                    <td height='15px'>". $row["name"] ."</td>
                                                    <td height='15px'>". $row["unit"] ."</td>
                                                    <td height='15px'>". $row["price"] ."</td>
                                                    <td height='15px'>". $sum ."</td>
                                                </tr>";
                                    }
                                ?>
                                
                                <tr height ="48.33px" width="100%" align="right">
                                    <td height ="48.33px" colspan="4">
                                        <div style="margin-right: 6%;"><b>Total</b></div>
                                    </td>
                                    <td height ="48.33px" align="center">
                                        <?php
                                            echo "<div>$total</div>";
                                        ?>
                                    </td>
                                </tr>
                                
                            </table>
                        </td>
                    </tr>
                    <tr align="Right" width="15%">
                        <td  valign="center" style="font-size: 30px;">
                            <div style="border: 1px solid black;margin-right: 15%;margin-left:73%;font-size: 40px;"><a href="order.php">Order Now</a></div>
                        </td>
                    </tr>
                </table>
            </td>
            <td width ="20%"></td>
        </tr>
        <tr width = "100%"height="10%">
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>