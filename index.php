<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin: 0px;padding: 0px;">
    <center>
        <h1>This is my HomePage</h1>
        <br>
        <a href="./ajakan/1"><button type="button">Button To ATM</button></a>
        <a href="./ajwisan/pts"><button type="button">Button To AJwisan pts</button></a>
        <br>
        <table>
        <tr>
            <th>11</th>
            <th>E_ID</th>
            <th>E_Username</th>
            <th>E_Password</th>
            <th>E_Name</th>
            <th>E_Surname</th>
            <th>E_Role</th>
            <th>E_Address</th>
        </tr>
    <?php

        include "connectDOdb.php";
        // $query = "
        // CREATE TABLE `pts_employee` (
        //     `E_ID` int(11) NOT NULL Primary KEY,
        //     `E_Username` varchar(20) NOT NULL,
        //     `E_Password` varchar(20) NOT NULL,
        //     `E_Name` varchar(20) NOT NULL,
        //     `E_Surname` varchar(20) NOT NULL,
        //     `E_Role` varchar(10) NOT NULL,
        //     `E_Address` varchar(255) DEFAULT NULL
        // );";
        // $query = "INSERT INTO pts_employee VALUES (1,'sornpat2','ssss','sornpat','Amthiangtham','admin','1234 wk strt');";

        $query = "SELECT * FROM test.pts_employee;";
        
        $result = $conn->query($query);
        $conn->close();

        while($row = $result->fetch_assoc()) {
            echo "  <tr>
                        <td>1</td>
                        <td>".$row["E_ID"]."</td>
                        <td><b>".$row["E_Username"]."</b></td>
                        <td>".$row["E_Password"]."</td>
                        <td>".$row["E_Name"]."</td>
                        <td>".$row["E_Surname"]."</td>
                        <td>".$row["E_Role"]."</td>
                        <td>".$row["E_Address"]."</td>
                    </tr>   ";
        }
    ?>
    </table>
    </center>
</body>
</html>