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
    #Connect DB
    include "connect.php";

    #Get Data
    $check =$_POST["check"];
    $result = "";
    #Temporary Data
    $arr = count($check);
    $i = 0;

    #Array to String // [003,004,005]-> "003,004,005"
    foreach($check as $id){
        if(++$i === $arr) {
            $result = $result ."$id";
        }else{
            $result = $result ."$id,";
        }
    }

    #Delete Data
    $delete = "DELETE FROM Customer WHERE IDCust IN ($result)";
    $conn -> query($delete);
    $conn->close();

    $echo = "<h1>Delete ID $result<h1>";
?>
    <a href="index.php"><i class="bi bi-arrow-90deg-left">Return</i></a>
</body>
</html>