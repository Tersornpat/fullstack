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
    $filename = "cnter.txt";
    if(file_exists($filename)){
        $fp = fopen($filename,"r");
        $counter = fgets($fp,99);
        fclose($fp);
    }else {
        $counter = 0;
    }
    $fp = fopen($filename,"w");
    $counter += 1;
    fwrite($fp,$counter);
    fclose($fp);
    print "คุณเป็นคนที่ $counter";
    ?>
</body>
</html>