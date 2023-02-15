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
    $a = 0;
    if($a == 7):
        print "a equals 7";
        print "...";
    elseif($a == 6):
        print "a equals 6";
        print "...";
    else :
        print "a is neither 7 nor 6";
    endif
    ?>
</body>
</html>