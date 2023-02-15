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

    $begin = $_GET['begin'];
    $end = $_GET['end'];

    $sql = "SELECT * FROM customer WHERE IDCust between '$begin' and '$end' order by IDCust";
    $result = $conn->query($sql);
    $conn->close();
?>

    <form action="intotable.php" method="get">
        <center>
                <h1>
                    Enter Your Customer ID begin
                </h1>
                <input type="number" name ="begin" placeholder="begin">
                <input type="number" name="end" placeholder="end">
                <br>
                <button type="submit" style="margin-top: 20px;wi    dth: 300px;height: 100px;font-weight: 600px;font-size: 50px;">Submit</button>
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