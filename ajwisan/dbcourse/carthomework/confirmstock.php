<?php
    session_start();
?>
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
    ?>

    <?php
        $id = $_POST["id"];
        $value = $_POST['value'];
        $stock =array();

        #print data
        echo "$id";
        echo "<br>";

        $sql = "SELECT unit FROM product WHERE id BETWEEN 1 AND 8 Order By id";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) { 
            array_push($stock,$row["unit"]);
        }
    ?>

    <center>
        <table border=1>
            <tr height ="48.33px" width="100%">
                <th height ="48.33px" width = 10%>ID</th>
                <th height ="48.33px" width = 30%>Name</th>
                <th height ="48.33px" width = 15%>Price/Unit</th>
                <th height ="48.33px" width = 15%>Cart</th>
            </tr>
            <?php
                $sql = "SELECT id,name,price FROM product WHERE id BETWEEN 1 AND 8 Order By id";
                $result = $conn->query($sql);
                $status = array();
                $i = 0;
                while($row = $result->fetch_assoc()) { 
                    if($stock[$i] >= $value[$i]){
                        $stat = 1; 
                    }else{
                        $stat= 0;
                    }
                    array_push($status,$stat);
                    echo "<tr height='50px' align='center' width='100%'>
                                <td>". $row["id"] ."</td>
                                <td >". $row["name"] ."</td>
                                <td >". $row["price"] ."</td>";
                                
                    if($stat){
                                echo "<td style='color:green'>Success</td>";
                    }else{
                                echo "<td style='color:red'>Failed</td>";
                    }
                    echo "</tr>";
                    $stat  = 1;
                    $i+=1;
                }
            ?>

        </table>
                <br><br><br><br><br>
        <?php
            $check = 1;
            for ($i=0; $i <sizeof($status) ; $i++) { 
                if($status[$i] == 0){
                    $check = 0;
                    break;
                }
            }
            echo "<a href=";

            if($check == 0){
                echo "'failed.html'";
            }else{
                echo "'update.html'";
            }

            echo "><input type='Submit'></a>";
        ?>
    </center>

        
        
    <?php
    #print data
    // print_r($value);
    // echo "<br>";
    // print_r($stock);
    // echo "<br>";
    // print_r($status);
    // echo "<br>";
    $conn->close(); 
    ?>
</body>
</html>