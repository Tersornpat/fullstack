<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>star</title>
</head>
<body style="margin:0;padding:0;">
    <table border="0" width="100%" height="968px">
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr width="100%" height="793px">
            <td></td>
            <td width="1502px" height="793px" valign="top"  align="center">
                <div style="border: 1px solid black;border-radius: 60px;width:1502px;height: 793px;">
                    <div style="margin: 58px;">
                        <h1>Your Output</h1>
                    </div>
                    <!--output-->
                    <div style="margin-top: 78px;height:376px;width:320px" align="left">
                        <?php
                        $type = $_GET["type"];
                        $height = $_GET["height"];
                        #echo "$type<br>";
                        #echo $height;
                        if ($type == 1) {
                            for ($i=0; $i <= $height; $i++) { 
                                for ($j=0; $j < $i; $j++) { 
                                    echo "<font style='font-size:50px;'>*</font> ";
                                }
                                echo "<br>";
                            }
                        }elseif($type == 2){
                            for ($i=height; $i < 0; $i--) { 
                                for ($j=i; $j < 0; $j--) { 
                                    echo "<font style='font-size:50px;'>*</font> ";
                                }
                                echo "<br>";
                            }
                        }elseif($type == 3){

                        }elseif($type == 4){

                        }
                    ?>
                    </div>
                    <div style="margin-top: 145px;">
                        <a href="homepage.html">
                            <button type="submit" style="  
                                        background-color: white;
                                        border: 2px solid rgb(40, 20, 167);
                                        width: 198px;
                                        height:  54px;
                                        text-align: center;
                                        border-radius: 10px;
                                        cursor: pointer;;">
                            <font style="font-size:40px;"> Back </font>
                            </button>
                        </a>
                    </div>
                </div>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <br>
</body>
</html>