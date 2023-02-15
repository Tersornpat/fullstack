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
    $name = "KMITL";
    $named = "Com_Sci";

    if(($name == "")||($named == "")){
        print "ข้อมูลไม่สมบูรณ์";
    }else{
        print "<h1>เงื่อนไข AND เป็นจริงทั้งสองอย่าง โปรแกรมจะทำงาน</h1>";
    }
    ?>
</body>
</html>