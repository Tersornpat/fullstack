<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <form method="post" action="cal.php">
        <?php
            $othbill = 10; 
            $fhdbill = 20;
            $ohdbill = 30;

            $sum = ($othbill*1000)+($fhdbill*500)+($ohdbill*100);
            echo "<h1>amount ->".$sum."</h1>";

            echo "<input type='hidden' name='othbill' value='$othbill'>";
            echo "<input type='hidden' name='fhdbill' value='$fhdbill'>";
            echo "<input type='hidden' name='ohdbill' value='$ohdbill'>";        
        ?>
        <center>
            <h3>Enter Amount</h3>
            <input type="number" required name="amount">
            <button type="submit"> submit </button>
        </center>
    </form>
</body>
</html>