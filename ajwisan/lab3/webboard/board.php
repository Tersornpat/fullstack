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
        $msg = $_POST["msg"];
        $name = $_POST["name"];


            $filename = "data.txt";
            $fp = fopen($filename,"a");
            fputs($fp,"ข้อความ :$msg<br>\n");
            fputs($fp,"โพสโดย :$name <br>\n");
            fputs($fp,"วันที่ : ".date("Y-M-d")."<hr>\n");
            fclose($fp);
        ?>
        <?php
            $fs = fopen($filename,"r");
            $e = fpassthru($fs);
        ?>
        <hr>
    <form methods="post"  action="board.php">
        ข้อความ: <textarea name="msg" cols="30" rows="10"></textarea>
        โพสโดย: <textarea name="name" cols="30" rows="10"></textarea>
        <button type="Submit"> Submit</button>
    </form>
</body>
</html>