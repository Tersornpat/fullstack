<?php
    include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="left">
    <?php
        $gen=$_GET["gen"];
        $mid = $_GET["mid"];
        $weight = $_GET["weight"];
        $grade = $_GET["grade"];
        $pweight = $_GET["pweight"];
    ?>
    <br>
    <br>
    <center>
        <table border="1" width="60%" >
            <tr align= "center">
                <td>
                    <table border="1" width=50%>
                        <tr>
                            <th colspan="2">
                                <h1>Cherry</h1>
                            </th>
                        </tr>
                        <tr>
                            <td width=50%>
                                <font size="4"> รุ่นปลูก
                                    <?php echo $gen; ?>
                                </font>
                            </td>
                            <td>
                                <font size="4"> รหัสสมาชิก
                                    <?php echo $mid; ?>
                                </font>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=2>
                                <font size="4"> น้ำหนักเชอรี่ที่รับซื้อ
                                    <?php echo $weight; ?>
                                                กิโลกรัม</font>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=2>
                                <font size="4"> เกรดเชอรี่
                                    <?php echo $grade; ?>
                                </font>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=2>
                                <font size="4"> น้ำหนักเชอรี่คุณภาพ
                                    <?php echo $weight; ?>
                                                -
                                    <?php echo $pweight; ?>
                                                = 
                                    <?php
                                        $sumweight = $weight - $pweight;
                                        echo $sumweight."  กิโลกรัม"; 
                                    ?>
                                </font>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr height=50px>
            </tr>
            <tr align= "center">
                <td>
                    <table border="0" width=50%>
                        <tr>
                            <th>
                                <h1>Financial</h1>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <table border="0" width=100%>
                                    <tr>
                                        <td>
                                            <font size="4"> เงินเชอรี่คุณภาพ
                                            <label >200</label>
                                                            บาท
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <font size="4"> เงินเชอรี่ลอย
                                            <label >200</label>
                                                            บาท
                                            </font>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr height=20px>

                        </tr>
                        <tr>
                            <td>
                            <table border="0" width=100%>
                                    <tr>
                                        <td>
                                            <font size="4"> หักค่าบริการกองกลาง
                                            <label >200</label>
                                                            บาท
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <font size="4"> หักเงินออมสามชิก
                                            <label >200</label>
                                                            บาท
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <font size="4"> รวมรายรับสุทธิ
                                            <label >200</label>
                                                            บาท
                                            </font>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr height="50px">
            </tr>
            <tr align="center">
                <td>
                    <table border="0" width=50%>
                        <tr align="center" width=50%>
                            <td>
                                <button type="submit" >ยืนยัน</button>
                            </td>
                            <td>
                                <button onclick="history.back()">ยกเลิก</button>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>