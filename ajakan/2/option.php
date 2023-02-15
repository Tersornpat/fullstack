<?php
    include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <center>
        <br>
        <?php
            echo "<h1>This is Your option </h1> <br>
                <h4><font color='red'>".$_SESSION['key']."_ID ".$_SESSION['id']." : ".$_SESSION["name"]."  ".$_SESSION["surname"] ."</font><h4><br>";
            
        ?>
        <div>
            <a href="buycherry.php"><button type="button" class="btn btn-primary">buyCherry</button></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="empdata.php"><button type="button" class="btn btn-success">empData</button></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="report.php"><button type="button" class="btn btn-danger">report</button></a>
        </div>
    </center>
</body>
</html>