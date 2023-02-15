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
    <form action="buycherryfinance.php" method="get">
    <br>
    <br>
    <center>
        <table border="1" width="60%" >
            <tr align= "center">
                <td>
                    <table border="0" width=75%>
                        <tr>
                            <th colspan="2">
                                <h1>Cherry</h1>
                            </th>
                        </tr>
                        <tr>
                            <td width=50%>
                                <font size="4"> รุ่นปลูก
                                <input type="text" name="gen">
                                </font>
                            </td>
                            <td>
                                <font size="4"> รหัสสมาชิก
                                <input type="text" name="mid">
                                </font>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=2>
                                <font size="4"> น้ำหนักเชอรี่ที่รับซื้อ
                                <input type="text" name="weight">
                                                กิโลกรัม</font>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=2>
                                <font size="4"> เกรดเชอรี่
                                <select name="grade">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                                </font>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=2>
                                <font size="4"> น้ำหนักเชอรี่คุณภาพ
                                                น้ำหนักเชอรี่ทั้งหมด
                                                -
                                <input type="text"  name="pweight" placeholder = "น้ำเหนักเชอรี่ลอย (กิโลกรัม)">
                                                = </font>
                                                น้ำหนักเชอรี่ดี
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <table border="0" width=50%>
                        <tr align="center" width=50%>
                            <td>
                                <button type="submit" >คำนวณ</button>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </center>
    </form>
</body>
</html>