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
        $a = array(
            "Ford" => array(
                "color" => "Blue",
                "type" => "Focus"
            ),
            "Nissan" => array(
                "color" => "Black",
                "type" => "sunny"
            ),
            "Mazda" => array(
                "color" => "Green",
                "type" => "2"
            )
            );

        echo $a["Mazda"]["type"] ."\n";
        echo $a["Mazda"]["color"];

        $x = "a";
        $d = "x";
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $$d;
    ?>
</body>
</html>