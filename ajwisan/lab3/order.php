<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Post การสั่งซื้อสินค้าจาก Shopping Mall</title>
</head>
<body>
    <center>
        <?php
        
        $name = $_POST["name"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $Computer = $_POST["Computer"];
        $Notebook = $_POST["Notebook"];

        print "คุณ $name";
        print "เบอร์โทรติดต่อ $tel <br>";
        print "Email $email <br>";
        print "สินค้าที่คุณสั่ง <br>";
        print "$Computer <br>";
        print "$Notebook <br>"; 
        ?>
    </center>
</body>
</html>