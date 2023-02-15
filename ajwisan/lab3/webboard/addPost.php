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

    $name = $_POST["name"];
    $msg = $_POST["msg"];

    //read counter
    $filename = "counter.txt";
    $fp = fopen($filename,"r");
    $countert = (int) fgets($fp,99);
    fclose($fp);

    $counter = strval($countert);
    $counter +=1;

    $id = strval($counter);

    //plus counter
    $filename = "counter.txt";
    $fp = fopen($filename,"w");
    fwrite($fp,$counter);
    fclose($fp);

    echo "$counter <br>";
    // echo gettype($counter);
    // echo "$name <br>";
    // echo "$msg <br>";

    //create post id and insert data
    $fp = fopen($id.".txt","a");
    fputs($fp,"id: $id<br>\n");
    fputs($fp,"name: $name<br>\n");
    fputs($fp,"msg: $msg<br>\n");
    fputs($fp,"date: ".date("Y-M-D")."<br>\n");
    fputs($fp,"<a href='seeDetail.php?id=$id'><button type='button'>See Detail</button></a><hr>\n");
    fclose($fp);

    // //plus counter
    // $filename = "counter.txt";
    // $fp = fopen($filename,"w");
    // $counter = (int) fgets($fp,99);
    // $counter +=1;
    // fwrite($fp,$counter);
    // fclose($fp);

    ?>
    <form method="post" action="addPost.php">
        <h2 style="margin-left: 10%;">Add Post</h2>
        <div style="margin-left: 5%;">
            <font size="4">ชื่อ: </font>
            <input type="text" name="name">
            <br>
            <font size="4">ข้อความ: </font>
            <input type="text" name="msg">
            <br>
            <button type="submit" style="margin-top: 20px;">Submit</button>
        </div>
    </form>
    <?php

    //read counter
    $filename = "counter.txt";
    $fp = fopen($filename,"r");
    $counter = (int) fgets($fp,99);
    fclose($fp);

    for ($i=1; $i <= $counter; $i++) { 
        $fs = fopen("$i.txt","r");
        $e = fpassthru($fs);
        fclose($fs);
    }
    ?>
</body>
</html>